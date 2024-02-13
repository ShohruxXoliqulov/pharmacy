<?php

namespace Database\Seeders;

use App\Models\Product_capacity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCapacitySeeder extends Seeder
{
    public function run(): void
    {
        Product_capacity::create([
            'capacity' => 500,
        ]);

        Product_capacity::create([
            'capacity' => 200,
        ]);

        Product_capacity::create([
            'capacity' => 50,
        ]);
    }
}
