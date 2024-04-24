<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function placed(){
        return view('User.Pages.placed');
    }
    public function placeorder(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::with('address', 'address.country', 'item')->where('user_id', $user_id)->first();

        if ($request->pay_method == '0') {
            //place order by cod
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
                $order->amount_made = 0;
                $order->order_method = '0';
                $order->partial_payment_amount = 0;
                $order->amount_left = 0;
                $order->razepay_id = NULL;
                $order->save();

                $cart['item']->map(function ($query) use ($order) {

                    $prd = Product::with('seller')->where('id', $query->product_id)->first();

                    $item = new OrderItems();
                    $item->order_id = $order->id;
                    $item->user_id = $order->user_id;
                    $item->order_unique_id = $order->order_unique_id;
                    $item->product_id = $prd->id;
                    $item->seller_id = $prd->seller->sellar_id;
                    $item->original_price = $query->original_price;
                    $item->discounted_price = $query->discounted_price;
                    $item->tax_type = $query->tax_type;
                    $item->tax_percentage = $query->tax_percentage;
                    $item->tax_amount = $query->tax_amount;
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
                $cart->coupon_id =NULL;
                $cart->total_coupon_discount =0;
                $cart->total_tax_amount =0;
                $cart->total_tax_amount =0;
                $cart->user_address_id =NULL;
                $cart->save();

                DB::commit();
                return response()->json(['status' => 1]);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['status' => 2]);
            }
        } else if ($request->pay_method == '1') {

            
        }
    }
}
