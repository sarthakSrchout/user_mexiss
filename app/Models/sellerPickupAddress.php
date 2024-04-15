<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerPickupAddress extends Model
{
    protected $primaryKey="sellarAddress_id";
    protected $table="sellar_pickup_address";
    protected $guarded=[];
}
