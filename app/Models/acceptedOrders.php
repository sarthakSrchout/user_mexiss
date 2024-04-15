<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acceptedOrders extends Model
{
    protected $primaryKey="accept_order_id";
    protected $table="order_accepted";
    protected $guarded=[];
}
