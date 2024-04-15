<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addCustValues extends Model
{
    protected $primaryKey="cust_val_id";
    protected $table="cust_attribute_value_admin";
    protected $guarded=[];
}
