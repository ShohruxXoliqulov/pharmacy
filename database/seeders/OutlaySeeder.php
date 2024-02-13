<?php

namespace Database\Seeders;

use App\Models\Outlay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutlaySeeder extends Seeder
{
    public function run(): void
    {
        Outlay::create([
            'storage_id' => rand(1, 2),
            'pharmacy_id' => rand(1, 10),
            'product_id' => rand(1, 25),
            'quantity' => rand(200, 500),
        ]);
    }
}
