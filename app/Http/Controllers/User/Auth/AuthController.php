<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Common\BulksSMS;
use App\Http\Controllers\Common\OtpController;
use App\Http\Controllers\Controller;
use App\Mail\SendOtp;
use App\Models\emailotp;
use App\Models\sellerBusinessDetails;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    protected $BulksSMS;
    protected $OtpServices;
    protected $cart;

    public function __construct(BulksSMS $BulksSMS, OtpController $OtpController,CartController $cart)
    {
        $this->OtpServices = $OtpController;
        $this->BulksSMS = $BulksSMS;
        $this->cart = $cart;
    }
    public function saveEmailOtp($email)
    {
        $otp = $this->OtpServices->generateOtp(6);
        $user = emailotp::updateOrCreate(['email' => $email], [
            'otp' => $otp,
            'otp_expiry_time' => Carbon::now()->addMinute(5)
        ]);
        $data = [
            'otp' => $otp,
            'email' => $email
        ];
        Mail::to($email)->send(new SendOtp($data));

        return true;
    }
    public function sendotp(Request $request)
    {

        // dd($request->all());
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json(['status' => 0, 'msg' => 'User already registered with this email!']);
        }
        $this->saveEmailOtp($request->email);
        return response()->json(['status' => 1, 'msg' => 'OTP sent to your email!']);
    }
    public function register(Request $request)
    {

        // dd($request->all());
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json(['status' => 0, 'msg' => 'User already registered with this email!']);
        }
        $otpget = $this->OtpServices->getOtpEmail($request['email']);

        if ($otpget && ($otpget['otp'] == $request['otp'])) {
            $data = new User();
            $data->email = $request->email;
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->country_table_id = $request->country_table_id;
            $data->phone_no = $request->phone_no;
            $data->address = $request->locality;
            $data->pincode = $request->zipcode;
            $data->save();

            Auth::login($data);
            return response()->json(['status' => 1, 'msg' => 'User Registered!']);
        } else {
            return response()->json(['status' => 2, 'msg' => 'Invalid otp!']);
        }
    }

    public function sendloginotp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => 0, 'msg' => 'User not registered with this email!']);
        }
        $this->saveEmailOtp($request->email);
        return response()->json(['status' => 1, 'msg' => 'OTP sent to your email!']);
    }
    public function login(Request $request)
    {
        $otp = $request->first . $request->second . $request->third . $request->fourth. $request->fifth . $request->sixth;
        // dd($otp);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => 0, 'msg' => 'User not registered with this email!']);
        }
        $otpget = $this->OtpServices->getOtpEmail($request['email']);

        if ($otpget && ($otpget['otp'] == $otp)) {
            Auth::login($user);
            $this->cart->guestcarttocart($request);
            return response()->json(['status' => 1, 'msg' => 'User Registered!']);
        } else {
            return response()->json(['status' => 2, 'msg' => 'Invalid otp!']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('user-homepage');
    }
}
