<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function homepage(Request $request)
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();
        return view('User.Pages.homepage',$data);
    }
    public function product()
    {
        return view('User.Pages.product');
    }
    public function aboutus()
    {
        return view('User.Pages.aboutuspage');
    }
    public function contactus()
    {
        return view('User.Pages.contactus');
    }
    public function term()
    {
        return view('User.Pages.termsandcondition');
    }
    public function profile()
    {
        return view('User.Pages.userprofile');
    }
    public function faq()
    {
        return view('User.Pages.frequently');
    }
    public function help()
    {
        return view('User.Pages.helpandsupport');
    }
    public function productdetails()
    {
        return view('User.Pages.singleproduct');
    }
    public function cart()
    {
        return view('User.Pages.cart');
    }
    public function address()
    {
        return view('User.Pages.address');
    }
    public function myaddress()
    {
        return view('User.Pages.myaddress');
    }
    public function payment()
    {
        return view('User.Pages.payment');
    }
    public function myorrders()
    {
        return view('User.Pages.myoorders');
    }
    public function shopbycategories()
    {
        return view('User.Pages.shopbycategories');
    }
}



