<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchases;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Product $product)
    {
        // dd(Purchases::where("id", $product->id)->exists());
        if(Purchases::where("product_id",'=', $product->id)->exists()){
        return redirect()->back()->with("error","شما این محصول رو خریدین از قبل");
    }else{
        if(Auth::user()->balance >= $product->discount_action()){
        Purchases::create([
            "product_id"=> $product->id,
            "user_id"=> Auth::user()->id,
        ]);
        User::where("id", Auth::user()->id)->update([
            "balance"=> User::find(Auth::user()->id)->balance - $product->discount_action(),
            ]);
    return redirect()->back()->with("success","موفق باشی دوره رو خریدی !");
    }else{
    return redirect()->back()->with("error","موجودی نداری !");
    }
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
