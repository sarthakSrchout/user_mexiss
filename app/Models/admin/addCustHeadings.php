<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addCustHeadings extends Model
{
    protected $primaryKey="cust_attr_heading_id ";
    protected $table="cust_attribute_heading_admin";
    protected $guarded=[];
}
