<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => "Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB",
            'slug' => fake()->unique()->uuid(),
            'summary' => fake()->paragraph(),
            'description' => fake()->paragraph(2),
            'photo' => "/storage/product/large-size-laptop.jpg",
            'model' => "15AMN7",
            'cat_id' => rand(1,42),
            'views' => rand(0,20),
            'status' => 'active',
            'is_featured' => false,
            'price' => rand(12000,500000),
            'discount' => rand(0,60),
        ];
    }
}
