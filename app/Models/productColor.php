<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productColor extends Model
{
    protected $primaryKey="pcolorid";
    protected $table="product_colors";
    protected $guarded=[];
}
