<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $primaryKey="brandid";
    protected $table="brand";
    protected $guarded=[];
}
