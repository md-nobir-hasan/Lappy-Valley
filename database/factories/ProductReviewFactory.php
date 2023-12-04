<?php

namespace Database\Factories;

use App\Models\Product;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReview>
 */
class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'rate' => $this->faker->numberBetween(1, 5),
            'review' => $this->faker->paragraph,
        ];
    }
}
