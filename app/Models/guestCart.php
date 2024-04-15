<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestCart extends Model
{
    protected $primaryKey = "guest_cart_id";
    protected $table = "guest_cart";
    protected $guarded = [];
}