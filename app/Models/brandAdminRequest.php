<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandAdminRequest extends Model
{
    protected $primaryKey="addBrandId";
    protected $table="addition_brand";
    protected $guarded=[];
}
