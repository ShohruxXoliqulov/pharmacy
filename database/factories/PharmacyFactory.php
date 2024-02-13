<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class PharmacyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'organization_id' => rand(1, 2),
            'corporation_id' => rand(1, 2),
            'region_id' => rand(1, 4),
            'name' => fake()->name,
            'firm_name' => fake()->name,
            'owner_name' => fake()->name,
            'owner_phone' => fake()->phoneNumber,
            'image' => null,
        ];
    }
}
