<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplePage extends Model
{
    protected $table = 'multiple_pages';

    
    use HasFactory;
    
    public function section(){
        return $this->hasMany(MultiplePageSection::class,'multiple_page_id','id')->where('status','1')->orderBy('page_position');
    }
}
