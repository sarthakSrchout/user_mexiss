<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestCart extends Model
{
    protected $primaryKey = "id";
    protected $table = "guest_cart";

    public function item(){
        return $this->hasMany(GuestCartItem::class,'guest_cart_id','id');
    }
    public function coupon(){
        return $this->hasOne(Coupon::class,'id','coupon_id');
    }
    protected $guarded = [];
}