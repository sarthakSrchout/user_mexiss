<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otp_verification extends Model
{
    protected $primaryKey="otp_id";
    protected $table="customer_otp_verification";
    protected $guarded=[];
}
