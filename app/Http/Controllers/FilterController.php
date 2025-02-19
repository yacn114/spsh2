<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(){
        $product_filter = null;
        return view("main.filter",["products_filter"=>$product_filter]);
    }
    public function store(Request $request){

    }
}
