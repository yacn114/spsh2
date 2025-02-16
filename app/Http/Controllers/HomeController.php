<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('discount', '>', 0)
            ->orderByRaw('(price - discount) DESC')
            ->get();
        $product = Product::where('discount_percent', '>' ,0)->orderBy('discount_percent', 'desc')->get();

        return view('index',['products' => $products,'product'=>$product]);
    }

    public function index2(){
        return view('index2');
    }
}

