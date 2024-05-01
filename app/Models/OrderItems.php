<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';

    use HasFactory;

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function order(){
        return $this->hasOne(Order::class,'id','order_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','seller_id');
    }
    public function accepted(){
        return $this->hasOne(acceptedOrders::class,'order_items_id','id');
    }
}
