<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'productType_id' => rand(1, 4),
            'productCapacity_id' => rand(1, 3),
            'product_name' => fake()->name,
            'price' => rand(10000, 1000000),
            'expiration_date' => fake()->date('Y-m-d'),
        ];
    }
}
