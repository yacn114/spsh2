<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class singleController extends Controller
{
    public function index(Product $product){
        // $product = Product::where('name','=',$slug)->first();
        $comment = Comment::where("product_id", '=',$product->id)->get();
        
        return view("main.detail",['product'=>$product,'comment'=>$comment]);
    }
}
