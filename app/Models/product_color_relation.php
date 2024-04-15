<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_color_relation extends Model
{
    protected $primaryKey="prc_id";
    protected $table="product_color_relation";
    protected $guarded=[];
}
