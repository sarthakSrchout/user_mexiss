<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartProduct extends Model
{
    protected $primaryKey="cartprt_id";
    protected $table="cart";
    protected $guarded=[];
}
