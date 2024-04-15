<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custmer_address extends Model
{
    protected $primaryKey="custAddress_id";
    protected $table="customer_address";
    protected $guarded=[];
}
