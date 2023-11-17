<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
           'title' =>($title = fake()->word(3)),
           'slug' => Str::slug($title).rand(1,100),
           'serial' => rand(1,11),
           'status' => 'active',
           'is_parent' => 0,
           'parent_id' => rand(1,7)
        ];
    }
}
