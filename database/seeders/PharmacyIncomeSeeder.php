<?php

namespace Database\Seeders;

use App\Models\Pharmacy_income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PharmacyIncomeSeeder extends Seeder
{
    public function run(): void
    {
        Pharmacy_income::create([
            'pharmacy_id' => rand(1, 10),
            'storage_id' => rand(1, 2),
            'product_id' => rand(1, 25),
            'price' => rand(10000, 200000),
            'quantity' => rand(100, 500),
        ]);
    }
}
