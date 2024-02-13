<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    public function run(): void
    {
        Organization::create([
            'name' => 'organization-1',
            'logo' => null,
        ]);

        Organization::create([
            'name' => 'organization-2',
            'logo' => null,
        ]);
    }
}
