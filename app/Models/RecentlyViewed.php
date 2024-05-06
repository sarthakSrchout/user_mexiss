<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentlyViewed extends Model
{

    protected $table = 'recently_product_table';

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
    use HasFactory;
}
