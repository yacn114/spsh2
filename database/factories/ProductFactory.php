<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3, true);
        $discount = 0;
        //$this->faker->numberBetween( 0, 500);
        $price = $this->faker->numberBetween( 1000, 10000);
        $discountPercent = $this->faker->numberBetween(0,100);

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'view' => $this->faker->numberBetween(0, 100000),
            'price' => $price,
            'discount' => $discount,
            'discount_percent' => $discountPercent,
            'language' => $this->faker->randomElement(['fa', 'en']),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'student_count' => $this->faker->numberBetween(0, 500),
            'tutorial_level' => $this->faker->randomElement(['level1','level2','level3']),
            'result' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
