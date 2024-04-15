<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class wishlist extends Model
{
    protected $primaryKey = "wish_id";
    protected $table = "wishlist_product";
    protected $guarded = [];
}