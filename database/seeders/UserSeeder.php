<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'organization_id' => 1,
            'name' => 'example-1',
            'email' => 'example1@gmail.com',
            'password' => Hash::make('example0'),
        ]);

        User::create([
            'organization_id' => 2,
            'name' => 'example-2',
            'email' => 'example2@gmail.com',
            'password' => Hash::make('example0'),
        ]);
    }
}
