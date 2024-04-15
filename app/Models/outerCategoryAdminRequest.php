<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outerCategoryAdminRequest extends Model
{
    protected $primaryKey="addoutcid";
    protected $table="addition_outer_category";

    protected $guarded = [];

    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outcid');
    }
    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','s_id');
    }
}
