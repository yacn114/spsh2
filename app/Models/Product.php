<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageProduct;


class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    
    protected $guarded = [];
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

    // scope filtering ================================================================================


     /**
     * اعمال فیلترهای جستجو بر اساس ورودی‌های کاربر
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, array $filters)
    {
        return $query
            ->when($filters['name'] ?? null, function ($query, $name) {
                $query->where('name', 'LIKE', "%{$name}%");
            })
            ->when($filters['levels'] ?? null, function ($query, $levels) {
                $query->where('tutorial_level', $levels);
            })
            ->when($filters['price'] ?? null, function ($query, $price) {
                if ($price === 'free') {
                    $query->where('price', 0);
                } elseif ($price === 'hot') {
                    $query->where('discount', '>', 1)->orderBy('discount', 'desc');
                } elseif ($price === 'discount') {
                    $query->where('discount_percent', '>', 0)->orderBy('discount_percent', 'desc');
                }
            })
            ->when($filters['language'] ?? null, function ($query, $language) {
                $query->where('language', $language);
            })
            ->when($filters['category'] ?? null, function ($query, $category) {
                $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->when($filters['catcat'] ?? null, function ($query, $catego) {
                $query->whereHas('categories', function ($q) use ($catego) {
                    $q->whereHas('parentCategoryRelation', function ($qq) use ($catego) {
                        $qq->where('name', $catego);
                    });
                });
            });
    }
    

    // scope filtering ================================================================================


}