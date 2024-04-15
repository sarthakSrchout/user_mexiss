<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller_decline_reason extends Model
{
    protected $primaryKey="decline_id";
    protected $table="seller_decline_reasons";
    protected $guarded=[];
}
