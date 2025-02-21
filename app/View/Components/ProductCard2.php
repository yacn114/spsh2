<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard2 extends Component
{
    public $product;
    public $size;

    public function __construct($product,$size)
    {
        $this->product = $product;
        $this->size = $size;
    }

    public function render()
    {
        return view('components.product-card2');
    }
}
