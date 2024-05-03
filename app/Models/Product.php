<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function outer()
    {
        return $this->hasOne(outerCategory::class, 'outCid', 'outcid');
    }
    public function seller()
    {
        return $this->hasOne(sellerBusinessDetails::class, 'sellar_id', 'seller_id');
    }
    public function cat()
    {
        return $this->hasOne(category::class, 'cid', 'cid');
    }
    public function sub()
    {
        return $this->hasOne(subCategory::class, 'scid', 'scid');
    }
    public function machine()
    {
        return $this->hasMany(ProductMachineData::class, 'product_id', 'id');
    }
    public function technical()
    {
        return $this->hasMany(ProductTechnicalData::class, 'product_id', 'id');
    }
    public function ratings()
    {
        return $this->hasMany(rating::class, 'product_id', 'id');
    }
    public function averageRating($id)
    {
        $data =  rating::where('product_id',$id)
            ->avg('rating');
        return round($data,1);
    }
    public function averagePercentage($id)
    {
        $av =  $this->averageRating($id);
        return ($av/5) *100;
    }
    public function peoplerating()
    {
        $rating =  $this->ratings()
            ->distinct('user_id');
        return $rating->count();
    }

    public function fivepercentage()
    {
        $total_rating =  $this->ratings()->count();
        $five =  $this->ratings()->where('rating', '5')->count();
        if ($total_rating == 0) {
            return 0;
        }
        return ($five / $total_rating) * 100;
    }
    public function fourpercentage()
    {
        $total_rating =  $this->ratings()->count();
        $four =  $this->ratings()->where('rating', '4')->count();
        if ($total_rating == 0) {
            return 0;
        }
        return ($four / $total_rating) * 100;
    }
    public function threepercentage()
    {
        $total_rating =  $this->ratings()->count();
        $three =  $this->ratings()->where('rating', '3')->count();
        if ($total_rating == 0) {
            return 0;
        }
        return ($three / $total_rating) * 100;
    }
    public function twopercentage()
    {
        $total_rating =  $this->ratings()->count();
        $two =  $this->ratings()->where('rating', '2')->count();
        if ($total_rating == 0) {
            return 0;
        }
        return ($two / $total_rating) * 100;
    }
    public function onepercentage()
    {
        $total_rating =  $this->ratings()->count();
        $one =  $this->ratings()->where('rating', '1')->count();
        if ($total_rating == 0) {
            return 0;
        }
        return ($one / $total_rating) * 100;
    }

    use HasFactory;
}
