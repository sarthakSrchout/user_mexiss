<?php

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\guestCart;
use Illuminate\Support\Facades\Auth;
    // dd("ASD");
if (!function_exists('authcheck')) {
    function authcheck(){
        // dd("ASda");
        return Auth::check();
    }
}
if (!function_exists('cartvalue')) {
    function cartvalue(){
    
        if(Auth::user()){
            $value = Cart::where('user_id',Auth::user()->id)->first();
            if($value){
                return $value->no_of_products ;
            }
            return 0;
        }
        else{
            $ip = request()->ip();
            $user = guestCart::where('user_ip', $ip)->first();
            if($user){
                return $user->no_of_products ;
            }
            return 0;
        }
    }
}
