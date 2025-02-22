<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Purchases;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Comment::all());
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
    public function store(StoreCommentRequest $request,Product $product)
    {
        
        if(Purchases::where('product_id', $product->id)
        ->where('user_id', Auth::id())
        ->exists()){
        if(Comment::query()->where('product_id','=',$product->id)->where('user_id','=',Auth::user()->id)->count() >= 1){
            return redirect()->back()->with('warning', 'شما بیش از حد مجاز کامنت گذاشتید!');
        }else{
            $comment = Comment::create([
                'comment'=>$request->validated("comment"),
                "user_id"=>Auth::user()->id,
                'product_id'=>$product->id,
            ]);
        
            return redirect()->back()->with('success', 'کامنت شما ثبت شد!');            
        }
    }else{
        return redirect()->back()->with('warning', 'شما هنوز این محصول را خریداری نکردید!');

    }

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
