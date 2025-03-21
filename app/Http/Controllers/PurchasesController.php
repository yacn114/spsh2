<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchasesRequest;
use App\Http\Requests\UpdatePurchasesRequest;
use App\Models\Purchases;
use Illuminate\Support\Facades\Auth;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchases::where('user_id','=', Auth::user()->id)->get();
        
        $user = Auth::user();
        return view("main.Purchases", ["data_Purchases"=> $purchases,"user"=> $user]);
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
    public function store(StorePurchasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchases $purchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchases $purchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchasesRequest $request, Purchases $purchases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchases $purchases)
    {
        //
    }
}
