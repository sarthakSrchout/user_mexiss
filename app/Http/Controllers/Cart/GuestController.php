<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\guestCart;
use App\Models\GuestCartItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    //----------------------------------------------------------guest cart function--------------------------------------------------//
    //guest add to cart
    public function guestaddtocart($request)
    {
        $ip = $request->ip();
        $prd = Product::where([['id', $request->product_id], ['product_type', '0'], ['status', '1'], ['product_quantity', '>', 0]])->first();
        if (!$prd) {
            abort(404);
        }
        $user = guestCart::where('user_ip', $ip)->first();
        if (!$user) {
            $user = new guestCart();
            $user->user_ip = $ip;
            $user->no_of_products = 1;
            $user->total_cart_value = $prd->discounted_price;
            $user->save();
        }
        $cartitem = GuestCartItem::where([['guest_cart_id', $user->id], ['product_id', $prd->id]])->first();
        if (!$cartitem) {
            $item = new GuestCartItem();
            $item->guest_cart_id = $user->id;
            $item->product_id = $prd->id;
            $item->quantity = 1;
            $item->discounted_price = $prd->discounted_price;
            $item->original_price = $prd->original_price;
            $item->save();
        }
        return redirect()->back()->with('success_response', 'Product Added to Cart!');
    }
    //update guestcart total price
    public function updateguestcartprice($guest_cart_id)
    {

        $cart = guestCart::with('item')->where('id', $guest_cart_id)->first();
        $original_price = 0;
        $discounted_price = 0;
        $cart['item']->map(function ($query) use (&$original_price, &$discounted_price) {
            $original_price = $original_price + ($query->original_price * $query->quantity);
            $discounted_price = $discounted_price + ($query->discounted_price * $query->quantity);
        });

        $cart->no_of_products = sizeof($cart['item']);
        $cart->total_discounted_price = $discounted_price;
        $cart->total_original_price = $original_price;
        $cart->total_cart_value = ($discounted_price - $cart->total_coupon_discount);
        $cart->save();
    }
    //guest increase quanitity
    public function guestincreasecartquanitity($request)
    {
        $ip = $request->ip();
        $cart = guestCart::where('user_ip', $ip)->first();
        $item = GuestCartItem::where([['id', $request->cart_item_id], ['guest_cart_id', $cart->id]])->first();
        if (!$item) {
            abort(404);
        }

        $prd = Product::where([['id', $item->product_id], ['product_type', '0'], ['status', '1']])->first();
        // dd($item,$prd,$prd->quantity,$item->quantity + 1);
        if ($prd->product_quantity < ($item->quantity + 1)) {
            return redirect()->back()->with('error_response', 'Not enough quantity available!');
        }
        $item->quantity = $item->quantity + 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();

        $this->updateguestcartprice($cart->id);

        return redirect()->back()->with('success_response', 'Product Quantity Increased!');
    }
    //guest decrease quanitity
    public function guestdecreasecartquanitity($request)
    {
        $ip = $request->ip();
        $cart = guestCart::where('user_ip', $ip)->first();
        $item = GuestCartItem::where([['id', $request->cart_item_id], ['guest_cart_id', $cart->id]])->first();
        if (!$item) {
            abort(404);
        }
        $prd = Product::where([['id', $item->product_id], ['product_type', '0'], ['status', '1']])->first();
        if ($item->quantity <= 1) {
            $item->delete();
            $this->updateguestcartprice($cart->id);

            return redirect()->back()->with('success_response', 'Product removed from cart!');
        }
        $item->quantity = $item->quantity - 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();
        $this->updateguestcartprice($cart->id);

        return redirect()->back()->with('success_response', 'Product Quantity Decreased!');
    }
    //guest cart apply coupon
    public function guestcartapplycoupon($request)
    {
        $ip = $request->ip();

        $cart = guestCart::where('user_ip', $ip)->first();
        $coupon = Coupon::where('coupon_code', strtoupper($request->coupon))->first();
        // dd($request->coupon,$coupon);

        if (!$coupon) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }
        if (($coupon->valid_till < Carbon::now()) || ($coupon->valid_from > Carbon::now())) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }
        if ($coupon->minimum_cart_value > $cart->total_cart_value) {
            $msg = 'Add more product worth Rs.' . $coupon->minimum_cart_value - $cart->total_cart_value . ' to avail this coupon!';
            return redirect()->back()->with('error_response', $msg)->withInput();
        }
        $discount_amount = ($cart->total_cart_value * ($coupon / 100));

        if ($coupon->discount_upto != NULL) {
            if ($discount_amount >= $coupon->discount_upto) {
                $discount_amount = $coupon->discount_upto;
            }
        }
        $cart->total_coupon_discount = $discount_amount;
        $cart->coupon_id = $coupon->id;
        $cart->save();

        $this->updateguestcartprice($cart->id);

        return redirect()->back()->with('success_response', 'Coupon Added on Cart!');
    }

    //--------------------------------------------main function for both cart and guest cart-----------------------------------//

    //add to cart main function 
    public function addtocart(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestaddtocart($request);
        } else {
        }
    }
    //increase main function 
    public function increasecartquantity(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestincreasecartquanitity($request);
        } else {
        }
    }
    //decrease main function 
    public function decreasecartquantity(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestdecreasecartquanitity($request);
        } else {
        }
    }
    public function cartapplycoupon(Request $request)
    {
        $request->validate([
            'coupon' => 'required'
        ]);
        if (!Auth::user()) {
            return $this->guestcartapplycoupon($request);
        } else {
        }
    }
}
