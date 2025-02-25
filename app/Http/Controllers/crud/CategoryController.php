<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCrudRequest;
use App\Models\{CategoryCategory,Category};


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        $category_Category = DB::table('category_categories')->get();
        $category = Category::all();
        return view("crud.createCategory",[
            "category"=> $category,
            "catcat"=> $category_Category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryCrudRequest $request)
    {
        return "d";
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
