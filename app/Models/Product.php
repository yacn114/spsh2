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

        // start discount    
        if($this->discount == 1){
            return 0;
        }
        if ($this->discount >= 1){
        return number_format($this->discount);
        }
        // end discount
        
        // start percent
        if ($this->discount_percent != 0){
            $discountAmount = ($this->discount_percent / 100) * $this->price;
            return number_format(round($this->price - $discountAmount));
        }else{
                return number_format($this->price);
            }
            //end percent
    }

}


