<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageProduct;


class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    
    public function image(){
        return $this->hasMany(ImageProduct::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function discount_action(){
        if ($this->discount != 0){

        return $this->discount;
        }else{
            if ($this->discount_percent != 0){
            $discountAmount = ($this->discount_percent / 100) * $this->price;
        return round($this->price - $discountAmount);
            }else{
                return $this->price;
            }
        }
    }

}
