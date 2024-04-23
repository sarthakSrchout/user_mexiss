<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';

    public function country(){
        return $this->hasOne(CountryCode::class,'id','country_table_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    use HasFactory;
}
