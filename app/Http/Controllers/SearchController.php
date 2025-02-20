<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function store(Request $request)
    {
        $searchTerm = $request->input('search');

        $productsQuery = Product::where(function($query) use ($searchTerm) {
            $query->where('name', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('slug', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('description', 'LIKE', "%{$searchTerm}%");
        })->where('status', 'active');
        
        $products_count = $productsQuery->count();
        

        $products = $productsQuery->paginate(9)->appends(['search' => $searchTerm]);
        
        return view('main.search', compact(['products', 'searchTerm', 'products_count']));
        
    }
}
