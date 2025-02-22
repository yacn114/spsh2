<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'product_count'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'parentCategory');
    }
}
