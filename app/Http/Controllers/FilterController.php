<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(){
        $product_filter = null;
        $category = Category::all();
        return view("main.filter",["products_filter"=>$product_filter,"category"=>$category]);
    }
    public function show(Request $request)
    {
        
        $validatedData = $request->validate([
            'name'      => 'nullable|string|min:2|max:255',
            'levels'    => 'nullable|string|in:level1,level2,level3',
            'price'     => 'nullable|string|in:free,all,hot,discount',
            'language'  => 'nullable|string|in:fa,en',
            'category'  => 'nullable|string|exists:categories,slug',
        ]);
        
        $category = Category::all();
        $product_filter = Product::filter($validatedData);
        $count = $product_filter->count();
        $size = 12;
        $products_filter = $product_filter->paginate(9)->appends($validatedData);
        return view('main.filter', ['products_filter' => $products_filter,'category'=> $category,'count'=> $count,'size'=> $size,''=> $products_filter]);
    }
}
