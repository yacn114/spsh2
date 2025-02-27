<?php

namespace App\Http\Controllers;

use App\Http\Requests\pcsRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
    public function create(){
        $category = Category::all();
        return view("crud.pcCreate",[
            "category"=>$category
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(pcsRequest $request){
        $a = Product::create([
            "name"=>$request->name,
            "slug"=>$request->slug,
            "price"=>$request->price,
            "discount"=>$request->discount,
            'discount_percent'=>$request->discount_percent,
            "tutorial_level"=>$request->tutorial_level,
            "description"=>$request->description,
            "result"=>$request->result,
        ]);
        $b = DB::table('category_product')->insert([
            "product_id"=>$a->id,
            "category_id"=>$request->category,
        ]);
        if($b && $a){
            return redirect()->back()->with("success","با موفقیت ذخیره شد");
        }else{
            return redirect()->back()->with("error","ذخیره نشد");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $comment = Comment::where("product_id", $product->id)
                  ->where('status', 'open')
                  ->get();
        $userComments = Comment::where('user_id', Auth::id())->where('product_id','=',$product->id)->get();
        $comment = $comment->merge($userComments);
 
        return view("main.detail",['product'=>$product,'comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
