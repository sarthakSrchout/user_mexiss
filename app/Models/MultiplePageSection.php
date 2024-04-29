<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplePageSection extends Model
{
    protected $table = 'multiple_page_section_content';

    public function item(){
        return $this->hasMany(MultiplePageSectionItems::class,'multiple_page_section_content_id','id')->where('status','1')->orderBy('section_number');
    }
    use HasFactory;
}
