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
    public function show(Request $request){
        $validatedData = $request->validate([
            'name'      => 'nullable|string|min:2|max:255', 
            'levels'    => 'nullable|string|in:level1,level2,level3', 
            'price'     => 'nullable|string|in:free,all,hot,discount', 
            'seen'      => 'nullable|string|in:all,yesterday,last_week,last_mount', 
            'language'  => 'nullable|string|in:fa,en', 
            'category'  => 'nullable|string|exists:categories,slug'
        ]);
        
        $query = Product::query();
        
        
        if (!empty($validatedData['name'])) {
            $query->where('name', 'LIKE', "%{$validatedData['name']}%");
        }
        
        if (!empty($validatedData['levels'])) {
            $query->where('levels', $validatedData['levels']);
        }
        
        if (!empty($validatedData['price'])) {
            $query->where('price', $validatedData['price']);
        }
        
        if (!empty($validatedData['seen'])) {
            $query->where('seen', $validatedData['seen']);
        }
        
        if (!empty($validatedData['language'])) {
            $query->where('language', $validatedData['language']);
        }
        
        if (!empty($validatedData['category'])) {
            $query->whereHas('category', function ($q) use ($validatedData) {
                $q->where('slug', $validatedData['category']);
            });
        }
        
        // دریافت نتایج به‌صورت صفحه‌بندی شده
        $products = $query->paginate(9)->appends($validatedData);
        
        return view('main.products', compact('products_filter'));
        
    }
}
