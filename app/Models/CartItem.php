<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
    use HasFactory;
}
