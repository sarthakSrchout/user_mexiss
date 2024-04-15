<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outerCategory extends Model
{
    protected $primaryKey="outCid";
    protected $table="outer_category";
    protected $guarded=[];
}
