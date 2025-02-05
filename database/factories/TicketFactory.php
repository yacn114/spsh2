<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence(6), // تولید عنوان تصادفی
            'description_user' => $this->faker->paragraph(3), // توضیحات کاربر
            'description_admin' => $this->faker->optional()->paragraph(2), // توضیحات ادمین (گاهی خالی)
            'status' => $this->faker->randomElement(['open', 'closed']), // وضعیت تیکت
            'user_id' => User::factory(), // ایجاد کاربر تصادفی
            'admin_id' => $this->faker->boolean(50) ? User::factory() : null, // گاهی ادمین دارد، گاهی نه
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
