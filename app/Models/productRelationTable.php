<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productRelationTable extends Model
{
    protected $primaryKey="prtid";
    protected $table="product_relation_table";
    protected $guarded=[];
}
