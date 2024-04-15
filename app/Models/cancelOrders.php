<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cancelOrders extends Model
{
    protected $primaryKey="order_cancel_id";
    protected $table="order_canceled";
    protected $guarded=[];
}
