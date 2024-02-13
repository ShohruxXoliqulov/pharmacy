<?php

namespace Database\Seeders;

use App\Models\Storage_type;
use Illuminate\Database\Seeder;

class StorageTypeSeeder extends Seeder
{
    public function run(): void
    {
        Storage_type::create([
            'name' => 'freezing',
        ]);
    }
}
