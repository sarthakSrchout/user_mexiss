<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outerCategory extends Model
{
    protected $primaryKey="outCid";
    protected $table="outer_category";

    public function activecategory(){
        return $this->hasMany(category::class,'outCid','outCid')->where('status','1');
    }
    protected $guarded=[];
}
