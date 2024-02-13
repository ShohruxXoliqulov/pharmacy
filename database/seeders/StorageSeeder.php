<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    public function run(): void
    {
        Storage::create([
            'storageType_id' => 1,
            'organization_id' => 1,
            'name' => 'storage-1',
        ]);

        Storage::create([
            'storageType_id' => 1,
            'organization_id' => 2,
            'name' => 'storage-2',
        ]);
    }
}
