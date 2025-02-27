<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    // رابطه‌ی BelongsTo برای دسته‌بندی والد
    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

        // رابطه‌ی HasMany برای دسته‌بندی‌های فرزند
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function parentCategoryRelation()
    {
        return $this->belongsTo(CategoryCategory::class, 'parentCategory');
    }
    
}
