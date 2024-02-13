<?php

namespace Database\Seeders;

use App\Models\Expired;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpiredSeeder extends Seeder
{
    public function run(): void
    {
        Expired::create([
            'storage_id' => rand(1, 2),
            'pharmacy_id' => rand(1, 10),
            'product_id' => rand(1, 25),
            'quantity' => rand(100, 1000),
        ]);
    }
}
