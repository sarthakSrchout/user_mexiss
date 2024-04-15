<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderPlacement extends Model
{
    protected $primaryKey="order_placed_id";
    protected $table="order_placed";
    protected $guarded=[];
}
