<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Coupon;
use App\Models\guestCart;
use App\Models\GuestCartItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
            $user->total_discounted_price = $prd->discounted_price;
            $user->total_original_price = $prd->original_price;
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

            $user->no_of_products = $user->no_of_products + 1;
            $user->total_cart_value = $user->total_cart_value +  $prd->discounted_price;
            $user->total_discounted_price = $user->total_discounted_price +  $prd->discounted_price;
            $user->total_original_price = $user->total_original_price +  $prd->original_price;
            $user->save();
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
    //check totalprice of cart with coupon validity
    public function couponvalidity($request)
    {
        $ip = $request->ip();
        $cart = guestCart::where('user_ip', $ip)->first();
        $coupon = Coupon::where('id', $cart->coupon_id)->first();
        // dd($coupon);
        if (!$coupon) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updateguestcartprice($cart->id);

            return;
        }
        if (($coupon->valid_till < Carbon::now()) || ($coupon->valid_from > Carbon::now())) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updateguestcartprice($cart->id);

            return;
        }
        if ($coupon->minimum_cart_value > $cart->total_discounted_price) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updateguestcartprice($cart->id);

            return;
        }
        if ($cart->coupon_id) {
            $discount_amount = ($cart->total_discounted_price * ($coupon->discount_percentage / 100));

            if ($coupon->discount_upto != NULL) {
                if ($discount_amount >= $coupon->discount_upto) {
                    $discount_amount = $coupon->discount_upto;
                }
            }
            $cart->total_coupon_discount = $discount_amount;
            $cart->save();
            $this->updateguestcartprice($cart->id);

            return;
        }
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
        if ($prd->product_quantity < ($item->quantity + 1)) {
            return redirect()->back()->with('error_response', 'Not enough quantity available!');
        }
        $item->quantity = $item->quantity + 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();
        $this->updateguestcartprice($cart->id);
        $this->couponvalidity($request);

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
            $this->couponvalidity($request);

            return redirect()->back()->with('success_response', 'Product removed from cart!');
        }
        $item->quantity = $item->quantity - 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();

        $this->updateguestcartprice($cart->id);
        $this->couponvalidity($request);

        return redirect()->back()->with('success_response', 'Product Quantity Decreased!');
    }
   
    //guest cart apply coupon
    public function guestcartapplycoupon($request)
    {
        $ip = $request->ip();

        $cart = guestCart::where('user_ip', $ip)->first();
        $coupon = Coupon::where([['coupon_code', strtoupper($request->coupon)],['status','1']])->first();

        if (!$coupon) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }
        if (($coupon->valid_till < Carbon::now()) || ($coupon->valid_from > Carbon::now())) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }
        if ($coupon->minimum_cart_value > $cart->total_discounted_price) {
            $msg = 'Add more product worth Rs.' . $coupon->minimum_cart_value - $cart->total_discounted_price . ' to avail this coupon!';
            return redirect()->back()->with('error_response', $msg)->withInput();
        }
    
        $discount_amount = ($cart->total_discounted_price * ($coupon->discount_percentage / 100));

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
    //guest cart remove coupon
    public function guestcartremovecoupon($request)
    {
        $ip = $request->ip();

        $cart = guestCart::where('user_ip', $ip)->first();

        $cart->total_coupon_discount = 0;
        $cart->coupon_id = NULL;
        $cart->save();

        $this->updateguestcartprice($cart->id);

        return redirect()->back()->with('success_response', 'Coupon Removed from Cart!');
    }
    //--------------------------------------------logined user cart functions -------------------------------------------------//
    //guest cart to user cart
    public function guestcarttocart($request)
    {
        $ip = $request->ip();
        $cart = guestCart::with('item')->where('user_ip', $ip)->first();

        if ($cart['item']) {
            $user_id = Auth::user()->id;
            $c = Cart::where('user_id', $user_id)->first();
            if (!$c) {
                $c = new Cart();
                $c->user_id = $user_id;
                $c->no_of_products = $cart->no_of_products;
                $c->total_cart_value = $cart->total_cart_value;
                $c->total_original_price = $cart->total_original_price;
                $c->total_discounted_price = $cart->total_discounted_price;
                $c->coupon_id = $cart->coupon_id;
                $c->total_coupon_discount = $cart->total_coupon_discount;
                $c->save();
            }
            $c->no_of_products = $cart->no_of_products + $c->no_of_products;
            $c->total_cart_value = $cart->total_cart_value + $c->total_cart_value;
            $c->total_original_price = $cart->total_original_price + $c->total_original_price;
            $c->total_discounted_price = $cart->total_discounted_price + $c->total_discounted_price;
            $c->save();

            $cart['item']->map(function ($query) use ($c) {
                $item = CartItem::where([['cart_id', $c->id], ['product_id', $query->product_id]])->first();
                if (!$item) {
                    $item = new CartItem();
                    $item->cart_id = $c->id;
                    $item->product_id = $query->product_id;
                    $item->quantity = $query->quantity;
                    $item->discounted_price = $query->discounted_price;
                    $item->original_price = $query->original_price;
                    $item->save();
                } else {
                    $item->quantity = $query->quantity + $item->quantity;
                    $item->discounted_price = $query->discounted_price;
                    $item->original_price = $query->original_price;
                    $item->save();
                }

                $query->delete();
            });
            $this->updatecartprice($c->id);
        }

        if ($cart) {
            $cart->delete();
        }
    }
    //update user cart price
    public function updatecartprice($cart_id)
    {

        $cart = Cart::with('item')->where('id', $cart_id)->first();
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
    //user add to cart
    public function useraddtocart($request)
    {
        $id = Auth::user()->id;
        $prd = Product::where([['id', $request->product_id], ['product_type', '0'], ['status', '1'], ['product_quantity', '>', 0]])->first();
        if (!$prd) {
            abort(404);
        }
        $user = Cart::where('user_id', $id)->first();
        if (!$user) {
            $user = new Cart();
            $user->user_id = $id;
            $user->no_of_products = 1;
            $user->total_cart_value = $prd->discounted_price;
            $user->total_discounted_price = $prd->discounted_price;
            $user->total_original_price = $prd->original_price;
            $user->save();
        }
        $cartitem = CartItem::where([['cart_id', $user->id], ['product_id', $prd->id]])->first();
        if (!$cartitem) {
            $item = new CartItem();
            $item->cart_id = $user->id;
            $item->product_id = $prd->id;
            $item->quantity = 1;
            $item->discounted_price = $prd->discounted_price;
            $item->original_price = $prd->original_price;
            $item->save();

            $user->no_of_products = $user->no_of_products + 1;
            $user->total_cart_value = $user->total_cart_value +  $prd->discounted_price;
            $user->total_discounted_price = $user->total_discounted_price +  $prd->discounted_price;
            $user->total_original_price = $user->total_original_price +  $prd->original_price;
            $user->save();
        }
        return redirect()->back()->with('success_response', 'Product Added to Cart!');
    }
    //check totalprice of cart with coupon validity
    public function usercouponvalidity($request)
    {
        $ip = Auth::user()->id;
        $cart = Cart::where('user_id', $ip)->first();
        $coupon = Coupon::where('id', $cart->coupon_id)->first();
        // dd($coupon);
        if (!$coupon) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updatecartprice($cart->id);

            return;
        }
        if (($coupon->valid_till < Carbon::now()) || ($coupon->valid_from > Carbon::now())) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updatecartprice($cart->id);

            return;
        }
        if ($coupon->minimum_cart_value > $cart->total_discounted_price) {
            $cart->total_coupon_discount = 0;
            $cart->coupon_id = NULL;
            $cart->save();
            $this->updatecartprice($cart->id);

            return;
        }
        if ($cart->coupon_id) {
            $discount_amount = ($cart->total_discounted_price * ($coupon->discount_percentage / 100));

            if ($coupon->discount_upto != NULL) {
                if ($discount_amount >= $coupon->discount_upto) {
                    $discount_amount = $coupon->discount_upto;
                }
            }
            $cart->total_coupon_discount = $discount_amount;
            $cart->save();
            $this->updatecartprice($cart->id);

            return;
        }
    }
    //user increase quanitity
    public function userincreasecartquanitity($request)
    {
        $id = Auth::user()->id;
        $cart = Cart::where('user_id', $id)->first();
        $item = CartItem::where([['id', $request->cart_item_id], ['cart_id', $cart->id]])->first();
        if (!$item) {
            abort(404);
        }

        $prd = Product::where([['id', $item->product_id], ['product_type', '0'], ['status', '1']])->first();
        if ($prd->product_quantity < ($item->quantity + 1)) {
            return redirect()->back()->with('error_response', 'Not enough quantity available!');
        }
        $item->quantity = $item->quantity + 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();
        $this->updatecartprice($cart->id);
        $this->usercouponvalidity($request);

        return redirect()->back()->with('success_response', 'Product Quantity Increased!');
    }
    //user decrease quanitity
    public function userdecreasecartquanitity($request)
    {
        $id = Auth::user()->id;
        $cart = Cart::where('user_id', $id)->first();
        $item = CartItem::where([['id', $request->cart_item_id], ['cart_id', $cart->id]])->first();
        if (!$item) {
            abort(404);
        }
        $prd = Product::where([['id', $item->product_id], ['product_type', '0'], ['status', '1']])->first();
        if ($item->quantity <= 1) {
            $item->delete();
            $this->updatecartprice($cart->id);
            // $this->couponvalidity($request);

            return redirect()->back()->with('success_response', 'Product removed from cart!');
        }
        $item->quantity = $item->quantity - 1;
        $item->discounted_price = $prd->discounted_price;
        $item->original_price = $prd->original_price;
        $item->save();

        $this->updatecartprice($cart->id);
        $this->usercouponvalidity($request);

        return redirect()->back()->with('success_response', 'Product Quantity Decreased!');
    }
    //user cart apply coupon
    public function usercartapplycoupon($request)
    {
        $ip = Auth::user()->id;

        $cart = Cart::where('user_id', $ip)->first();
        $coupon = Coupon::where([['coupon_code', strtoupper($request->coupon)],['status','1']])->first();

        if (!$coupon) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }
        if (($coupon->valid_till < Carbon::now()) || ($coupon->valid_from > Carbon::now())) {
            return redirect()->back()->with('error_response', 'Not a valid coupon!')->withInput();
        }

        if ($coupon->minimum_cart_value > $cart->total_discounted_price) {
            $msg = 'Add more product worth Rs.' . $coupon->minimum_cart_value - $cart->total_discounted_price . ' to avail this coupon!';
            return redirect()->back()->with('error_response', $msg)->withInput();
        }
        $discount_amount = ($cart->total_discounted_price * ($coupon->discount_percentage / 100));

        if ($coupon->discount_upto != NULL) {
            if ($discount_amount >= $coupon->discount_upto) {
                $discount_amount = $coupon->discount_upto;
            }
        }
        $cart->total_coupon_discount = $discount_amount;
        $cart->coupon_id = $coupon->id;
        $cart->save();

        $this->updatecartprice($cart->id);

        return redirect()->back()->with('success_response', 'Coupon Added on Cart!');
    }
    //user cart remove coupon
    public function usercartremovecoupon($request)
    {
        $ip = Auth::user()->id;

        $cart = Cart::where('user_id', $ip)->first();

        $cart->total_coupon_discount = 0;
        $cart->coupon_id = NULL;
        $cart->save();

        $this->updatecartprice($cart->id);

        return redirect()->back()->with('success_response', 'Coupon Removed from Cart!');
    }
    //--------------------------------------------main function for both cart and guest cart-----------------------------------//

    //add to cart main function 
    public function addtocart(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestaddtocart($request);
        } else {
            return $this->useraddtocart($request);
        }
    }
    //increase main function 
    public function increasecartquantity(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestincreasecartquanitity($request);
        } else {
            return $this->userincreasecartquanitity($request);
        }
    }
    //decrease main function 
    public function decreasecartquantity(Request $request)
    {
        if (!Auth::user()) {
            return $this->guestdecreasecartquanitity($request);
        } else {
            return $this->userdecreasecartquanitity($request);
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
            return $this->usercartapplycoupon($request);

        }
    }
    public function cartremovecoupon(Request $request)
    {

        if (!Auth::user()) {
            return $this->guestcartremovecoupon($request);
        } else {
            return $this->usercartapplycoupon($request);

        }
    }
}
