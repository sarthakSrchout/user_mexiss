<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $primaryKey="scid";
    protected $table="sub_category";

    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outCid');
    }
    public function cat(){
        return $this->hasOne(category::class,'cid','cid');
    }
    protected $guarded=[];
}
