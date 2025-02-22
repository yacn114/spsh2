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
      
            'sender_id' => User::factory(),
            'receiving_id' => User::factory(),
      
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
