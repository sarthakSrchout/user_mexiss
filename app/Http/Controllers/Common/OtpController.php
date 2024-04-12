<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\emailotp;
use App\Models\phoneotp;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    //create otp
    public function generateOtp(int $digit)
    {
        return mt_rand(pow(10, $digit - 1), pow(10, $digit) - 1);
    }

    public function getOtpEmail($email)
    {
        return emailotp::where('email', $email)
            ->where('otp_expiry_time', '>=', now())
            ->first();
    }

    public function getOtpPhone($phone)
    {
        return phoneotp::where('phone', $phone)
            ->where('otp_expiry_time', '>=', now())
            ->first();
    }
}
