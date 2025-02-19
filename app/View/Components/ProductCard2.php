<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard2 extends Component
{
    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('components.product-card2');
    }
}
