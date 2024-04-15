<?php

namespace App\Models;

use App\Models\admin\adminDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLeadRemark extends Model
{
    protected $table="admin_lead_remarks";

    public function admin(){
        return $this->hasOne(adminDetails::class,'adminId','admin_login_id');
    }
    use HasFactory;
}
