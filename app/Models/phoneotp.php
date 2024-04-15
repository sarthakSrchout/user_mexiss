<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneotp extends Model
{
    protected $table = 'phoneotps';
    protected $guarded = [];
    use HasFactory;
}
