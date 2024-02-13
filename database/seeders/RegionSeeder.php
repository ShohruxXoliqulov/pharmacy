<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run(): void
    {
        Region::create([
            'name' => 'Andijon',
        ]);

        Region::create([
            'name' => 'Toshkent',
        ]);

        Region::create([
            'name' => 'Farg\'one',
        ]);

        Region::create([
            'name' => 'Samarqand',
        ]);
    }
}
