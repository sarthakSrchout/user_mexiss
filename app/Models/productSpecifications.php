<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSpecifications extends Model
{
    protected $primaryKey="prd_specs_id";
    protected $table="product_specifications";
    protected $guarded=[];
}
