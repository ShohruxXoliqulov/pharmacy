<?php

namespace Database\Seeders;

use App\Models\Product_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    public function run(): void
    {
        Product_type::create([
            'name' => 'capsula',
        ]);

        Product_type::create([
            'name' => 'tabletka',
        ]);

        Product_type::create([
            'name' => 'sirob',
        ]);

        Product_type::create([
            'name' => 'kukun',
        ]);
    }
}
