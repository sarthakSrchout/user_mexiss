<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productPayment extends Model
{
    protected $primaryKey="payment_id";
    protected $table="payment";
    protected $guarded=[];
}
