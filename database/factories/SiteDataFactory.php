<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteData>
 */
class SiteDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameE' => $this->faker->company(), // نام انگلیسی شرکت
            'nameF' => $this->faker->companySuffix(), // نام فارسی یا یک نام مشابه
            'logo' => $this->faker->imageUrl(200, 200, 'business', true), // تصویر لوگو
            'about' => $this->faker->sentence(10), // توضیح کوتاه درباره شرکت
            'address' => $this->faker->address(), // آدرس تصادفی
            'phone' => $this->faker->phoneNumber(), // شماره تماس
            'email' => $this->faker->unique()->safeEmail(), // ایمیل یکتا
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
