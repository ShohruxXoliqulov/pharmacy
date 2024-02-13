<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run(): void
    {
        Todo::create([
            'organization_id' => rand(1, 2),
            'user_id' => rand(1, 2),
            'date' => fake()->date('Y-m-d'),
            'comment' => fake()->sentence,
        ]);
    }
}
