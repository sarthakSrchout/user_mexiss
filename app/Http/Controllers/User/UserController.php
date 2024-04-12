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
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.product',$data);
    }
    public function aboutus()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.aboutuspage',$data);
    }
    public function contactus()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.contactus',$data);
    }
    public function term()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.termsandcondition',$data);
    }
    public function profile()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.userprofile',$data);
    }
    public function faq()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.frequently',$data);
    }
    public function help()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.helpandsupport',$data);
    }
    public function productdetails()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.singleproduct',$data);
    }
    public function cart()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.cart',$data);
    }
    public function address()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.address',$data);
    }
    public function myaddress()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.myaddress',$data);
    }
    public function payment()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.payment',$data);
    }
    public function myorrders()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.myoorders',$data);
    }
    public function shopbycategories()
    {
        $data['country'] = DB::table('country_table')->orderBy('country_name')->get();

        return view('User.Pages.shopbycategories',$data);
    }
}



