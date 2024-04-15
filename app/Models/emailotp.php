<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emailotp extends Model
{
    protected $table = 'emailotps';

    protected $guarded = [];
    use HasFactory;
}
