<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\AdminLead;
use App\Models\sellerBusinessDetails;
use Illuminate\Http\Request;

class AdminQuery extends Controller
{
    public function query($s_id,$remark){
        $seller_id = $s_id;
        $data = sellerBusinessDetails::where('sellar_id', $seller_id)->first();
        $lead  = new AdminLead();
        $lead->unique_id =  rand(10000000000,99999999999);
        $lead->seller_id =  $s_id;
        $lead->phone =  $data->phone_no;
        $lead->email =  $data->email;
        $lead->name =  $data->name;
        $lead->status = 1;
        $lead->initial_remark = $remark;
        $lead->save();
        return true;
    }
}
