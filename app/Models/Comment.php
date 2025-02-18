<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    public $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // رابطه با محصول (Product)
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
