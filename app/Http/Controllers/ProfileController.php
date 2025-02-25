<?php

namespace App\Http\Controllers;
use App\Models\Purchases;
use Carbon\Carbon;
use Morilog\Jalali;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Moving;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function Symfony\Component\Clock\now;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    
    public function addBalance(){
        $user = Auth::user();
        return view("profile.addBalance",compact("user"));
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
            'user' => $request->user(),
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
}
