<?php

namespace Database\Factories;

use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageProduct>
 */
class ImageProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
//    protected $model = ImageProduct::class;
    protected $model = ImageProduct::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'alt' => $this->faker->sentence(3),
            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}
