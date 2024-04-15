<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $primaryKey = "rating_id";
    protected $table = "ratings";
    protected $guarded = [];
}