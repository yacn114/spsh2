<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovingRequest;
use App\Http\Requests\UpdateMovingRequest;
use App\Models\Moving;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MovingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moving = Moving::where('sender_id','=',Auth::user()->id)->orWhere('receiving_id','=',Auth::user()->id)->get();
        $user = Auth::user();
        return view('profile.move', ['moves'=> $moving,'user'=> $user]);
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
    public function store(StoreMovingRequest $request)
    {
        
         Moving::create([
            'sender_id'=> Auth::user()->id,
            'receiving_id'=> User::where('username','=',$request->get('username') )->first()->id,
         ]);
         User::find(Auth::user()->id)->update(['balance'=>User::find(Auth::user()->id)->balance - $request->get('balance')]);
         User::where('username','=',$request->get('username'))->update(['balance'=>User::where('username','=',$request->get('username'))->first()->balance + $request->get('balance')]);
         return redirect()->back()->with('success','با موفقیت انتقال داده شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moving $transfer_Purchase_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moving $transfer_Purchase_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovingRequest $request, Moving $transfer_Purchase_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moving $transfer_Purchase_history)
    {
        //
    }
}
