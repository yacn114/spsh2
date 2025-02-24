<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    /** @use HasFactory<\Database\Factories\PurchasesFactory> */
    use HasFactory;
    protected $casts = [
        'created_at' => 'datetime',
    ];
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
