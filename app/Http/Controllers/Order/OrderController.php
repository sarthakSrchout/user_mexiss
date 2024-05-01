<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Common\BulksSMS;
use App\Http\Controllers\Common\ImageUpload;
use App\Http\Controllers\Common\ShipRocket;
use App\Http\Controllers\Controller;
use App\Models\acceptedOrders;
use App\Models\cancelOrders;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\rating;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class OrderController extends Controller
{
    public $uploadImage;
    protected $shiprocket;
    protected $BulksSMS;
    public function __construct(ImageUpload $img, ShipRocket $shiprocket, BulksSMS $BulksSMS)
    {
        $this->shiprocket = $shiprocket;
        $this->BulksSMS = $BulksSMS;
        $this->uploadImage = $img;
    }
    public function placed()
    {
        return view('User.Pages.placed');
    }
    public function placeorder(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::with('address', 'address.country', 'item')->where('user_id', $user_id)->first();

        try {
            DB::beginTransaction();
            $prevord = Order::orderByDesc('created_at')->limit(1)->first();

            $order = new Order();
            if ($prevord != null) {
                $order->order_unique_id = $prevord->order_unique_id + 1;
            } else {
                $order->order_unique_id = 1000000000000;
            }
            $order->user_id = $user_id;
            $order->user_address_id = $cart->user_address_id;
            $order->coupon_id = $cart->coupon_id;
            $order->full_name = $cart->address->full_name;
            $order->phone_number = $cart->address->phone_number;
            $order->alt_phone_number = $cart->address->alt_phone_number;
            $order->country_name = $cart->address->country->country_name;
            $order->country_phone_code = $cart->address->country->country_phone_code;
            $order->state = $cart->address->state;
            $order->city = $cart->address->city;
            $order->pincode = $cart->address->pincode;
            $order->building_no_or_name = $cart->address->building_no_or_name;
            $order->colony = $cart->address->colony;
            $order->landmark = $cart->address->landmark;
            $order->address_type = $cart->address->address_type;
            $order->no_of_products = $cart->no_of_products;
            $order->total_order_value_without_tax = $cart->total_cart_value;
            $order->total_discounted_price = $cart->total_discounted_price;
            $order->total_original_price = $cart->total_original_price;
            $order->total_coupon_discount = $cart->total_coupon_discount;
            $order->total_tax_amount = $cart->total_tax_amount;
            $order->payable_amount = round($cart->total_cart_value + $cart->total_tax_amount);


            if ($request->pay_method == '0') {
                //place order by cod
                $order->amount_made = 0;
                $order->order_method = '0';
                $order->razepay_id = NULL;
            } else if ($request->pay_method == '1') {
                //place by razerpay
                $order->amount_made = round($cart->total_cart_value + $cart->total_tax_amount);
                $order->order_method = '1';
                $order->razepay_id = $request->razer_pay_id;
            }


            $order->partial_payment_amount = 0;
            $order->amount_left = 0;
            $order->save();

            $cart['item']->map(function ($query) use ($order, $request) {

                $prd = Product::with('seller')->where('id', $query->product_id)->first();

                $item = new OrderItems();
                $item->order_id = $order->id;
                $item->user_id = $order->user_id;
                $item->order_unique_id = $order->order_unique_id;
                $item->product_id = $prd->id;
                $item->seller_id = $prd->seller->sellar_id;
                $item->original_price = $query->original_price;
                $item->quantity = $query->quantity;
                $item->discounted_price = $query->discounted_price;
                $item->product_width = $prd->product_width;
                $item->product_length = $prd->product_length;
                $item->product_height = $prd->product_height;
                $item->product_weight = $prd->product_weight;
                $item->product_weight_unit = $prd->product_weight_unit;
                $item->tax_type = $query->tax_type;
                $item->tax_percentage = $query->tax_percentage;
                $item->tax_amount = $query->tax_amount;
                if ($request->pay_method == '0') {
                    //place order by cod
                    $item->payment_status = '0';
                } else if ($request->pay_method == '1') {
                    //place by razerpay
                    $item->payment_status = '1';
                }
                $item->coupon_discount_amount = $query->coupon_discount_amount;
                $item->payable_amount = round((($query->quantity * $query->discounted_price) + $query->tax_amount) - $query->coupon_discount_amount);
                $item->order_status = '0';
                $item->save();
                //delete cart item
                $query->delete();
            });
            // delete cart data
            $cart->no_of_products = 0;
            $cart->total_cart_value = 0;
            $cart->total_discounted_price = 0;
            $cart->total_original_price = 0;
            $cart->coupon_id = NULL;
            $cart->total_coupon_discount = 0;
            $cart->total_tax_amount = 0;
            $cart->total_tax_amount = 0;
            $cart->user_address_id = NULL;
            $cart->save();

            DB::commit();
            return response()->json(['status' => 1]);
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return response()->json(['status' => 2]);
        }
    }

    public function cancelorder(Request $request)
    {

        $orderIdProduct = $request->order_item_id;
        $orderitem = OrderItems::with('order', 'accepted')->where('id', $orderIdProduct)->first();

        $shiprocketOrderId = acceptedOrders::select('order_id_shiprocket', 'shipment_id_shiprocket', 'order_items_id')->where('order_items_id', $orderitem->id)->first();
        if ($shiprocketOrderId && $shiprocketOrderId->order_id_shiprocket != 0) {

            $shiprocket = $this->shiprocket->shiprocketAuth();
            $this->shiprocket->cancelOrder($shiprocket, $shiprocketOrderId->order_id_shiprocket);
            $cancelOrder = new cancelOrders([
                "order_items_id" => $shiprocketOrderId->order_items_id,
                "order_id_shiprocket" => $shiprocketOrderId->order_id_shiprocket,
                "shipment_id_shiprocket" => $shiprocketOrderId->shipment_id_shiprocket,
            ]);
            $cancelOrder->save();
        }

        acceptedOrders::where('order_items_id', $orderitem->id)->delete();

        $orderitem->order_status = '3';
        $orderitem->save();
        //razerpay
        if ($orderitem->order->order_method == '1') {

            $key_id = env('RAZORPAY_KEY');
            $secret = env('RAZORPAY_SECRET');

            // Initialize Razorpay API with your key ID and secret
            $api = new Api($key_id, $secret);

            $paymentId = $orderitem->order->razepay_id;

            try {
                // Make a refund request
                $paycurl = curl_init();
                curl_setopt_array($paycurl, array(
                    CURLOPT_URL => "https://api.razorpay.com/v1/payments/$paymentId/capture",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        "amount" => $orderitem->payable_amount * 100, // Amount to be refunded (in paise)

                    ]),
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Authorization: Basic " . base64_encode("$key_id:$secret")
                    ),
                ));
                curl_exec($paycurl);

                curl_close($paycurl);

              
                
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.razorpay.com/v1/payments/$paymentId/refund",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        "amount" => $orderitem->payable_amount * 100, // Amount to be refunded (in paise)
                        "speed" => "normal",
                        "notes" => [
                            "notes_key_1" => "Beam me up Scotty.",
                            "notes_key_2" => "Engage"
                        ],
                    ]),
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Authorization: Basic " . base64_encode("$key_id:$secret")
                    ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);

                $refunddata = json_decode($response);
                $orderitem->refund_razerpay_id = $refunddata->id;
                $orderitem->payment_status = '3';
                $orderitem->save();
            } catch (Exception $e) {
                return redirect()->back()->with('error_response', 'Some Problem in getting your payment! Contact Admin!');
            }
    
        }

        return redirect()->back()->with('success_response', 'Order cancelled!');
    }

    public function rating(Request $request){
        $order_item = OrderItems::where('id',$request->orderid)->first();
        // dd($request->all());
        if($request->ratingId){
            $rating = rating::where('rating_id',$request->ratingId)->first();
        }
        else{
            $rating = new rating();
        }
        $rating->rating = $request->rating;
        $rating->rating_head = $request->rating;
        $rating->product_id = $order_item->product_id;
        $rating->order_items_id = $order_item->id;
        $rating->user_id = Auth::user()->id;
        $rating->save();
        return true;
    }
    public function trackorder(Request $request){
        $shipmentId = $request->shipmentId;
        $shiprocket = $this->shiprocket->shiprocketAuth();

        $tracking = $this->shiprocket->trackingData($shiprocket, $shipmentId);

        $responseDecode = json_decode($tracking);
        // dd($responseDecode->{$shipmentId}->{'tracking_data'});
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        $data['tracking'] = $responseDecode->{$shipmentId}->{'tracking_data'};
        return view('User.Pages.trackorder', $data);
    }
}
