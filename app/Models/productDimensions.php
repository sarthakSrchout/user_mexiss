<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDimensions extends Model
{
    protected $primaryKey="product_dimension_id";
    protected $table="product_dimension";
    protected $guarded=[];
}
