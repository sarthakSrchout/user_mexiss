<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BulksSMS extends Controller
{
    public function sendSms($contact, $sms,$template_id)
    {
        $username = "AKITSTEE";
        $password = "aki@4321";
        $sender = "wrkngh";
        $route = "TA";
        $api_params = 'user=' . $username . '&key=ee9ce1a20dXX&senderid=' . $sender . '&mobile=' . $contact . '&accusage=1&message=' . $sms.'&entityid=1201160053507533452&tempid='.$template_id;

        $apiUrl = "http://sms.bulkssms.com/submitsms.jsp?" . $api_params;

        $ch  = curl_init();

        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $err = curl_error($ch);

        curl_close($ch);

        if ($err) {
            return "error";
        } else {
            return $response;
        }
    }


    public function sendPhoneRegistrationOTP($name,$otp,$phone)
    {
        $arrName = explode(" ", $name);

        $nameExploded = implode("%20", $arrName);

        $register = "register%20in%20our%20portal%20";

        $sms = "Dear%20" . $nameExploded . "%20we%20welcome%20you%20to%20the%20family%20of%20worknearghar%2Ecom%20%2E%20Your%20OTP%20to%20" . $register . "is%20" . $otp;

        $template_id = "1207162672596193169";
        $this->sendSms($phone, $sms,$template_id);

        return true;
    }

    public function sendPhoneLoginOTP($name,$otp,$phone)
    {
        $arrName = explode(" ", $name);

        $nameExploded = implode("%20", $arrName);

        $register = "login%20the%20application%20";

        $sms = "Dear%20" . $nameExploded . "%20we%20welcome%20you%20to%20the%20family%20of%20worknearghar%2Ecom%20%2E%20Your%20OTP%20to%20" . $register . "is%20" . $otp;

        $template_id = "1207162672596193169";
        $this->sendSms($phone, $sms,$template_id);

        return true;
    }
}
