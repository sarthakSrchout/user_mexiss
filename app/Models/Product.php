<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outcid');
    }
    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','seller_id');
    }
    public function cat(){
        return $this->hasOne(category::class,'cid','cid');
    }
    public function sub(){
        return $this->hasOne(subCategory::class,'scid','scid');
    }
    public function machine(){
        return $this->hasMany(ProductMachineData::class,'product_id','id');
    }
    public function technical(){
        return $this->hasMany(ProductTechnicalData::class,'product_id','id');
    }
    use HasFactory;
}
