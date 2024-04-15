<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $primaryKey = "question_id";
    protected $table = "question";
    protected $guarded = [];
}