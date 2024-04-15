<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productPics extends Model
{
    protected $primaryKey="pimgid ";
    protected $table="product_images";
    protected $guarded=[];
}
