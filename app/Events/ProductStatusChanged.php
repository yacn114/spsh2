<?php

namespace App\Events;

use App\Models\Product;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductStatusChanged
{
    use SerializesModels ,Dispatchable;
    public $product;
    public $status;
    public function __construct(Product $product,string $status)
    {
        $this->product = $product;
        $this->status = $status;
        

    }
}

