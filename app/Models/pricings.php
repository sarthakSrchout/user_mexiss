<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricings extends Model
{
    protected $primaryKey="msn";
    protected $table="product_prices";
    protected $guarded=[];
}
