<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryAdminRequest extends Model
{
    protected $primaryKey="addCatId";
    protected $table="addition_category";
    protected $guarded=[];

    
    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outCid');
    }
    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','s_id');
    }
    public function cat(){
        return $this->hasOne(category::class,'cid','cid');
    }
}
