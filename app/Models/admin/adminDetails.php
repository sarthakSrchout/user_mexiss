<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminDetails extends Model
{
    protected $primaryKey="adminId";
    protected $table="admin_login_details";
    protected $guarded=[];
}
