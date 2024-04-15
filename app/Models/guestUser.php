<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guestUser extends Model
{
    protected $primaryKey = "guest_id";
    protected $table = "guest_user";
    protected $guarded = [];
}