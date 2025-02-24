<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'description_user' => $this->faker->paragraph(3),
            'description_admin' => $this->faker->optional()->paragraph(2),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'user_id' => User::factory(),
            'product_id'=>Product::factory(),
            'admin_id' => $this->faker->boolean(50) ? User::factory() : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
