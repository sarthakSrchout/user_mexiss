<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerSignup extends Model
{
    protected $primaryKey="c_id";
    protected $table="customer_signup";
    protected $guarded=[];
}
