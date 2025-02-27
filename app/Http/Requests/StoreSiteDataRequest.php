<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSiteDataRequest extends FormRequest
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
    public function rules(): array
    {
        
            return [
                'nameE' => ['nullable', 'string', 'max:255'],
                'nameF' => ['nullable', 'string', 'max:255'],
                'logo' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
                'about' => ['nullable', 'string'],
                'address' => ['nullable', 'string', 'max:500'],
                'phone' => ['nullable', 'string', 'regex:/^09[0-9]{9}$/'],
                'email' => ['nullable', 'email', 'max:255'],
            ];
        }
    
        public function messages(): array
        {
            return [
                'nameE.required' => 'نام انگلیسی سایت الزامی است.',
                'nameF.required' => 'نام فارسی سایت الزامی است.',
                'logo.image' => 'فرمت فایل لوگو باید تصویر باشد.',
                'phone.regex' => 'فرمت شماره تلفن نامعتبر است.',
                'email.email' => 'فرمت ایمیل نامعتبر است.',
            ];
        }
}
