<?php

namespace Database\Seeders;

use App\Models\Corporation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorporationSeeder extends Seeder
{
    public function run(): void
    {
        Corporation::create([
            'name' => fake()->name,
            'calculation' => rand(100000, 500000),
            'comment' => fake()->sentence,
        ]);

        Corporation::create([
            'name' => fake()->name,
            'calculation' => rand(100000, 500000),
            'comment' => fake()->sentence,
        ]);
    }
}
