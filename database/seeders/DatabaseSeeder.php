<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TodoSeeder::class,
            IncomeSeeder::class,
            OutlaySeeder::class,
            RegionSeeder::class,
            StorageSeeder::class,
            ProductSeeder::class,
            ExpiredSeeder::class,
            PharmacySeeder::class,
            StorageTypeSeeder::class,
            CorporationSeeder::class,
            ProductTypeSeeder::class,
            OrganizationSeeder::class,
            PharmacyIncomeSeeder::class,
            PharmacyOutlaySeeder::class,
            ProductCapacitySeeder::class,
        ]);
    }
}
