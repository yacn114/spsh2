<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class pcsRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug'],
            'price' => ['required', 'integer', 'min:0'],
            'discount' => ['nullable', 'integer', 'min:0'],
            'discount_percent' => ['nullable', 'integer', 'min:0', 'max:100'],
            'language' => ['required', 'string', 'in:fa,en'],
            'description' => ['required', 'string', 'max:1000'],
            'tutorial_level' => ['required', 'string', 'in:level1,level2,level3'],
            'result' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'وارد کردن نام محصول الزامی است.',
            'slug.required' => 'اسلاگ الزامی است.',
            'slug.unique' => 'اسلاگ قبلاً ثبت شده است.',
            'price.required' => 'قیمت الزامی است.',
            'price.integer' => 'قیمت باید عدد باشد.',
            'discount_percent.max' => 'درصد تخفیف نمی‌تواند بیشتر از 100 باشد.',
            'language.in' => 'زبان باید fa یا en باشد.',
            'tutorial_level.in' => 'سطح آموزش باید یکی از level1, level2, level3 باشد.',
        ];
}
}
