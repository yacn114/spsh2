<?php

namespace App\Http\Requests;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class addBalanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        return [null];
        // $user = User::where('username', $request->get('username'))->first();
    
        // return [
        //     "amount" => ["integer", "required", function ($attribute, $value, $fail) use ($user) {
        //         if ($user && $value < $user->balance) {
        //             $fail("The amount must be at least {$user->balance}.");
        //         }
        //     }],
        //     "username" => ["string", "required", "exists:users,username"],
        // ];
    }
    
}
