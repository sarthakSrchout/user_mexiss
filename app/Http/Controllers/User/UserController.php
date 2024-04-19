<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\guestCart;
use App\Models\GuestCartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function homepage(Request $request)
    {
        // dd(isauth($request));
        // authcheck();
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['outer'] = DB::table('outer_category')->where('home_page_set', '!=', '0')->orderBy('created_at')->limit(8)->get();
        $data['product'] = DB::table('product')->where('status', '1')->inRandomOrder()->limit(12)->get();
        // dd($data);
        return view('User.Pages.homepage', $data);
    }
    public function product()
    {
        $data['recommendate'] = Product::where('status', '1')->inRandomOrder()->limit(22)->get();
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['product'] = DB::table('product')->where('status', '1')->orderByDesc('created_at')->paginate(8);

        return view('User.Pages.product', $data);
    }
    public function productsearch(Request $request)
    {
        $searchTerm = $request->search;


        $data['product'] = DB::table('product')->where('status', '1')
            ->where(function ($query) use ($searchTerm) {
                $lowerSearchTerm = strtolower($searchTerm);
                $query->orWhere(function ($query) use ($lowerSearchTerm) {
                    $query->whereRaw('LOWER(product_name) LIKE ?', ['%' . $lowerSearchTerm . '%']);
                });
            })->paginate(8);

        return view('User.Pages.productpagiantion', $data)->render();
    }
    public function aboutus()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.aboutuspage', $data);
    }
    public function contactus()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.contactus', $data);
    }
    public function term()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.termsandcondition', $data);
    }
    public function profile()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.userprofile', $data);
    }
    public function faq()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.frequently', $data);
    }
    public function help()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.helpandsupport', $data);
    }
    public function productdetails(Request $request)
    {
       
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['product'] = Product::where([['id', $request->product_id], ['status', '1']])->first();
        $data['recommendate'] = Product::where('status', '1')->where('id', '!=', $request->product_id)->inRandomOrder()->limit(22)->get();
        if (!$data['product']) {
            abort(404);
        }
        $data['product']['cart'] =0;
        $ip =$request->ip();
        $gc = guestCart::where('user_ip',$ip)->first();
        if(Auth::user()){
            $cart = Cart::where('user_id',Auth::user()->id)->first();

        }
        if(!Auth::user() && GuestCartItem::where([['guest_cart_id',$gc?->id],['product_id',$request->product_id]])->first()){
            $data['product']['cart'] = 1;
        }  
        else if (Auth::user() && CartItem::where([['cart_id',$cart?->id],['product_id',$request->product_id]])->first() ) {
            $data['product']['cart'] = 1;
        } 
        $data['product']['product_image'] = explode(',', $data['product']->product_images);

        return view('User.Pages.singleproduct', $data);
    }
    public function cart(Request $request)
    {
        $ip =$request->ip();
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        $data['recommendate'] = Product::where('status', '1')->inRandomOrder()->limit(22)->get();
        if(!Auth::user()){
            $data['cart'] = guestCart::with('item','coupon')->where('user_ip',$ip)->first();
        }
        else{
            $user_id =Auth::user()->id;

            $data['cart'] = Cart::with('item','coupon')->where('user_id',$user_id)->first();

        }

        return view('User.Pages.cart', $data);
    }
    public function address()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.address', $data);
    }
    public function myaddress()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.myaddress', $data);
    }
    public function payment()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.payment', $data);
    }
    public function myorrders()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.myoorders', $data);
    }
    public function shopbycategories()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.shopbycategories', $data);
    }
}
