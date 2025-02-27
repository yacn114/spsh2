<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\categoryCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(){
        $product_filter = null;
        $category = Category::all();
        $categoryCategory = categoryCategory::all();

        return view("main.filter",[
            "products_filter"=>$product_filter,
            "category"=>$category,
            "categoryCategory"=>$categoryCategory,
        ]);
    }
    public function show(Request $request)
    {

        $validatedData = $request->validate([
            'name'      => 'nullable|string|min:2|max:255',
            'levels'    => 'nullable|string|in:level1,level2,level3',
            'price'     => 'nullable|string|in:free,all,hot,discount',
            'language'  => 'nullable|string|in:fa,en',
            'category'  => 'nullable|string|exists:categories,slug',
            'catcat'  => 'nullable|string|exists:category_categories,name',
        ]);

        $category = Category::all();
        $categoryCategory = categoryCategory::all();
        $product_filter = Product::filter($validatedData)->where('status','=','active');
        $count = $product_filter->count();
        $size = 12;
        $products_filter = $product_filter->paginate(9)->appends($validatedData);
        return view('main.filter', ['products_filter' => $products_filter,'categoryCategory'=>$categoryCategory,'category'=> $category,'count'=> $count,'size'=> $size,''=> $products_filter]);
    }
}
