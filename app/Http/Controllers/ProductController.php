<?php

namespace App\Http\Controllers;

use App\Events\ProductStatusChanged;
use App\Http\Requests\{pcsRequest,UpdateProductRequest};
use App\Models\{Product,Category,Comment,ImageProduct};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function statusInactive(Product $product) {
        event(new ProductStatusChanged($product,"inactive"));
        $product->status = "inactive";
        $product->save();
        return redirect()->back()->with("success","غیرفعال شد");

     }
     public function statusActive(Product $product) {
        event(new ProductStatusChanged($product,"active"));
        $product->status = "active";
        $product->save();
        return redirect()->back()->with("success","فعال شد");
     }
    public function index()
    {
        $products = Product::paginate(10);
        return view("crud.list-product",[
            "products" => $products,

        ]);
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
        
        $product = Product::create([
            "name"=>$request->name,
            "slug"=>$request->slug,
            "price"=>$request->price,
            "discount"=>$request->discount,
            'discount_percent'=>$request->discount_percent,
            "tutorial_level"=>$request->tutorial_level,
            "description"=>$request->description,
            "result"=>$request->result,
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public'); // ذخیره در storage/app/public/products
        } else {
            $imagePath = null;
        }
    
        ImageProduct::create([
            "product_id"=> $product->id,
            "image"=> "/storage/".$imagePath,
            "alt"=>$product->slug,
        ]);
        $product->categories()->attach($request->category);

        
        return redirect()->back()->with("success","با موفقیت ذخیره شد");
        
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
        

        return view('crud.editProduct',['product'=>$product,"category"=>Category::all(),"cate"=>$product->categories()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        $product->categories()->sync($request->category);

        return redirect()->back()->with('success', 'محصول با موفقیت به‌روزرسانی شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        if($product->delete()){
            return redirect()->back()->with("success","پست با موفقیت حذف شد");
        }else{
            return redirect()->back()->with("error","پست حذف نشد");
        }
    }
}
