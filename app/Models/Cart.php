<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public function item(){
        return $this->hasMany(CartItem::class,'cart_id','id');
    }
    public function coupon(){
        return $this->hasOne(Coupon::class,'id','coupon_id');
    }
    public function address(){
        return $this->hasOne(UserAddress::class,'id','user_address_id');
    }
    use HasFactory;
}
