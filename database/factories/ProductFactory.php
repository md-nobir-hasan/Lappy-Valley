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
            'title' => "Lenovo IdeaPad 15AMN7 AMD Ryzen 57520U 8-512 GB,Brand New Cloud grey",
            'slug' => "kfdsaie".rand(0,9999),
            'summary' => fake()->paragraph(),
            'description' => fake()->paragraph(2),
            'photo' => "https://img.ep-cdn.com/i/500/500/al/altgyfzwibuorcempdvx/lenovo-ideapad-1-15amn7-cloud-grey-full-hd-ryzen-3-7320u-8gb-512gb-ssd-82vg0070ya-laptop-cene.jpg",
            'status' => 'active',
            'is_featured' => false,
            'price' => rand(12000,500000),
            'discount' => rand(1000,11500),
        ];
    }
}
