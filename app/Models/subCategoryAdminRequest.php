<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategoryAdminRequest extends Model
{
    protected $primaryKey="subCaId";
    protected $table="addition_sub_category";
    protected $guarded=[];

    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outCid');
    }
    public function cat(){
        return $this->hasOne(category::class,'cid','cid');
    }
    public function sub(){
        return $this->hasOne(subCategory::class,'scid','scid');
    }
    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','s_id');
    }
   
}
