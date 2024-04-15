<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLead extends Model
{
    protected $table="admin_leads";

    public function seller(){
        return $this->hasOne(sellerBusinessDetails::class,'sellar_id','seller_id');
    }
    use HasFactory;
}
