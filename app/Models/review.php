<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $primaryKey = "review_id";
    protected $table = "review";
    protected $guarded = [];
}