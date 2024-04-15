<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    protected $primaryKey="invent_id";
    protected $table="inventory";
    protected $guarded=[];
}
