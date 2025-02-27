<?php

namespace App\Http\Controllers;

use App\Http\Requests\addBalanceRequest;
use App\Http\Requests\StoreResponseRequest;
use App\Models\Purchases;
use Carbon\Carbon;
use Morilog\Jalali;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CategoryCategory;
use App\Models\Moving;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    
    public function addBalance(){
        $user = Auth::user();

        return view("profile.addBalance",compact("user"));
    }
    public function estelam(Request $request){
        $user = User::where("username",$request->get('username'))->get();
        dd($user);
    }
    public function editBalance(Request $request){
        if($request->has("delete")){
            $user = User::where('username', $request->get('username'))->first();
            $validatedData = $request->validate([
                "amount" => [
                    "integer",
                    "required",
                    function ($attribute, $value, $fail) use ($user) {
                        if (!$user) {
                            $fail("The selected username is invalid.");
                            return;
                        }
                        if ($value > $user->balance) {
                            $fail("The amount must not exceed the user's balance ({$user->balance}).");
                        }
                    }
                ],
                "username" => ["string", "required", "exists:users,username"],
            ]);

            $balance = User::where("username",'=',$request->get("username"))->first();
            $balance->balance = $balance->balance - $request->get('amount');
            $balance->save();
            $users= $request->get('username');
            return redirect()->back()->with('error',"کم شد از $users");

        }elseif($request->has("add")){
            $balance = User::where("username",'=',$request->get("username"))->first();
            $balance->balance = $balance->balance + $request->get('amount');
            $balance->save();
            $users= $request->get('username');
            return redirect()->back()->with('success',"انتقال داده شد به $users");

        }else{
            return redirect()->back()->with("error","لطفا یکی از ایتم های حذف یا اضافه کردن رو انتخاب کن");
        }
    }


     public function history(Request $request){
        $user = Auth::user();
        $moves = Moving::where("sender_id", '=',$user->id)->orWhere("receiving_id", '=',$user->id)->get();
        $buys = Purchases::where("user_id",'=', $user->id)->get();
        return view("profile.history", compact("user","moves","buys"));
    }


    public function edit(Request $request): View
    {
        $userCount = User::whereDate('created_at', Carbon::today())->count();
        
        $balance = User::all()->sum("balance");
        return view('profile.dashboard', [
            
            'balance' => $balance,
            'userCount'=>$userCount,
        
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // $request->validateWithBag('userDeletion', [
        //     'password' => ['required', 'current_password'],
        // ]);

        $user = $request->user();

        Auth::logout();

        // $user->delete();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function AdminTicket(){
        $tickets = Ticket::where('status' ,'=','open')->get();
        return view('profile.responseAdmin',['ticket'=> $tickets]);
    }
    public function responseAdmin2(){
        $ticket = Ticket::where('status','=','open')->firstOrFail();
        return view('profile.responseAdmin2',['ticket'=>$ticket]);
    }

    public function StoreResponse(StoreResponseRequest $request, Ticket $ticket){
    Ticket::where('id','=', $request->get('ticket'))->update([
        'status'=> 'closed',
        'description_admin'=> $request->get('response'),
    ]);
    return redirect()->back()->with('success','با موفقیت پاسخ ثبت شد');
    }
}
