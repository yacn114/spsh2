<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Purchases;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::where('user_id','=',Auth::user()->id)->orderBy('created_at','desc')->get();
        $user = Auth::user();
        return view('profile.ticket',['ticket'=> $ticket,"user"=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Purchases::where("user_id","=",Auth::user()->id)->get() ?? null;
        return view("profile.createTicket",["user"=> Auth::user(),"products"=> $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        if(Ticket::where("user_id","=",Auth::user()->id)->where('status','=','open')->count() >= 2){
        return redirect()->back()->with("error","هر کاربر فقط میتواند 2 تیکت باز داشته باشد!");
    }else{
        $product = $request->get('product') ?? null;
        $ticket = Ticket::create([
            "user_id"=> Auth::user()->id,
            "product_id"=> $product,
            'title'=> $request->get('other') ?? null,
            'description_user'=> $request->get('description'),

        ]);
        return redirect()->back()->with('success','تیکت شما با موفقیت ثبت شد');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        if ($ticket->user_id !== Auth::user()->id) {
            abort(403, 'شما اجازه دسترسی به این تیکت را ندارید.');
        }
        return view('profile.response',['ticket'=> $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
