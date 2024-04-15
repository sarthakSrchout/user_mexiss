<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cutomeAttributeValue extends Model
{
    protected $primaryKey="cust_att_val_id";
    protected $table="custome_attribute_value";
    protected $guarded=[];
}
