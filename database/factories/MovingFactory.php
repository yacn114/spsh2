<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moving>
 */
class MovingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->boolean(80) ? Product::factory() : null, // گاهی محصول دارد، گاهی نه
            'sender_id' => $this->faker->boolean(70) ? User::factory() : null, // گاهی فرستنده دارد، گاهی نه
            'receiving_id' => User::factory(), // گیرنده همیشه باید مقدار داشته باشد
            'amount' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->randomElement(['move', 'buy']), // نوع خرید یا انتقال
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
