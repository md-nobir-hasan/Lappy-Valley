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
        $brand = ['HP','Levovo',"Apple",'Asus','Acer','Walton'];
        return [
            'title' => $brand[rand(0,5)]." IdeaPad 15AMN7 AMD Ryzen 57520U ".fake()->word(1),
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
            'processor_generation_id' => rand(1,14),
            'processor_model_id' => rand(1,15),
            'display_size_id' => rand(1,6),
            'display_type_id' => rand(1,2),
            'ram_id' => rand(1,5),
            'ssd_id' => rand(1,4),
            'hdd_id' => rand(1,2),
            'graphic_id' => rand(1,5),
            'special_feature' => 'Backlit Keyboard',
            'brand_id' => rand(1,6),
            'stock' => rand(1,20),
        ];
    }
}
