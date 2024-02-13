<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    public function run(): void
    {
        Income::create([
            'storage_id' => rand(1, 2),
            'product_id' => rand(1, 25),
            'quantity' => rand(200, 500),
        ]);
    }
}
