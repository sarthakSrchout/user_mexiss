<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey="cid";
    protected $table="category";

    public function outer(){
        return $this->hasOne(outerCategory::class,'outCid','outCid');
    }
    protected $guarded=[];
}
