<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cust_order_phone extends Model
{
    protected $primaryKey="c_order_phone_id";
    protected $table="customer_order_phone";
    protected $guarded=[];
}
