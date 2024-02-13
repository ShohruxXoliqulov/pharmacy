<?php

namespace Database\Seeders;

use App\Models\Pharmacy_outlay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PharmacyOutlaySeeder extends Seeder
{
    public function run(): void
    {
        Pharmacy_outlay::create([
            'pharmacy_id' => rand(1, 2),
            'expired_id' => 1,
            'product_id' => rand(1, 25),
            'price' => rand(10000, 200000),
            'quantity' => rand(100, 500),
        ]);
    }
}
