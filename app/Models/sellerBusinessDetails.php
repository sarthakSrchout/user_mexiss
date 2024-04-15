<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerBusinessDetails extends Model
{
    protected $primaryKey="sellar_id";
    protected $table="sellar";
    protected $guarded=[];

    public function country(){
        return $this->hasOne(CountryCode::class,'id','country_table_id');
    }
}
