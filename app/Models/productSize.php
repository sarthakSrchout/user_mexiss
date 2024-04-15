<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSize extends Model
{
    protected $primaryKey="psizeid";
    protected $table="product_size";
    protected $guarded=[];
}
