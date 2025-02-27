<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCrudRequest;
use App\Models\Category;
use App\Models\categoryCategory as cc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $size = "8";
        $products = $category->products()->where('status','=','active')->orderBy("id","desc")->paginate(6);
        // dd($products);
        return view("main.category",['category_i'=>$category,'products'=> $products,'size'=>$size]);
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
        $category = Category::create([
            "name"=> $request->get("name"),
            "slug"=> $request->get("slug"),
            "category_id"=> $request->get("category"),
            "parentCategory"=> $request->get("other"),
        ]);
        if($category){
        return redirect()->back()->with("success","با موفیت ذخیره شد");
    }else{
        return redirect()->back()->with("error","ذخیره نشد");
        }
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view("crud.list-category",["category"=> Category::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories= Category::all();
        $cat =  cc::all();
        
        $catcat = cc::where("id",'=',$category->parentCategory)->firstOrFail();
        // dd($catcat);
        return view("crud.editCategory",[
            "category"=> $category,
            "catcat"=>$cat,
            "cate"=>$catcat,
            "categories"=> $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            "name" => ["required", "string"],
            "slug" => ["required", "string", Rule::unique('categories', 'slug')->ignore($category->id)], 
            "category" => ["nullable", "exists:categories,id"],
            "other" => ["nullable", "exists:category_categories,id"],
        ]);
        $category->update([
            "name"=> $request->get("name"),
            "slug"=> $request->get("slug"),
            "category_id"=> $request->get("category"),
            "parentCategory"=> $request->get("other"),
        ]);

        return redirect()->back()->with('success', 'دسته‌بندی با موفقیت به‌روز شد!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
            
            if ($category->children()->count() > 0) {
                return redirect()->back()->with("error", "این دسته دارای زیردسته است و قابل حذف نیست.");
            }
        
            if ($category->products()->count() > 0) {
                return redirect()->back()->with("error", "این دسته دارای محصولات مرتبط است و قابل حذف نیست.");
            }
        
            
            if ($category->delete()) {
                return redirect()->back()->with("success", "دسته مورد نظر با موفقیت حذف شد.");
            } else {
                return redirect()->back()->with("error", "مشکلی در حذف دسته پیش آمد، دوباره تلاش کنید.");
            }
        }
        
    }