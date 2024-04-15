<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_collection extends Model
{
    protected $primaryKey="ic_id";
    protected $table="img_collection_table";
    protected $guarded=[];
}
