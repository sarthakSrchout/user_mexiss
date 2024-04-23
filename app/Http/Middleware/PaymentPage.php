<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PaymentPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart = Cart::with('item')->where('user_id',$user_id)->first();
            if((sizeof($cart['item']) > 0) && ($cart->user_address_id != NULL))  {
                return $next($request);
            }
            abort(404);
        }
        abort(404);

    }
}
