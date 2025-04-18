<?php

namespace App\Http\Controllers;

use App\Models\categoryCategory;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product_discount = Product::where('discount', '>', 1)->where('status','=','active')
            ->orderByRaw('(price - discount) DESC')->take(6)
            ->get();
        $productـdiscount_percent = Product::where('discount_percent', '>' ,0)->where('status','=','active')->orderBy('discount_percent', 'desc')->take(6)->get();
        $category_Category = categoryCategory::all();
        $index = 1;
        return view('index',['product_discount' => $product_discount,'productـdiscount_percent'=>$productـdiscount_percent,'category_Category'=>$category_Category,'index'=>$index]);
    }

    public function index2(){
        $product_discount = Product::where('discount', '>', 1)->where('status','=','active')
        ->orderByRaw('(price - discount) DESC')->take(6)
        ->get();
        $index = 1;
        $productـdiscount_percent = Product::where('discount_percent', '>' ,0)->where('status','=','active')->orderBy('discount_percent', 'desc')->take(6)->get();
        $products_new = $product_discount->merge($productـdiscount_percent)->take(12);
        $category_Category = categoryCategory::all();
        $last_Comment = Comment::where('status','=','open')->latest()->take(6)->get();
        return view('index2',['products_new'=>$products_new,'categoryCategory'=>$category_Category,'last_comments'=>$last_Comment,'index'=>$index]);
    }
}

