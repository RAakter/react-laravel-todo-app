<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create some sample todos
         Todo::create([
            'title' => 'Project Task 1',
            'completed' => false,
        ]);

        Todo::create([
            'title' => 'Project Task 2',
            'completed' => false,
        ]);

        Todo::create([
            'title' => 'Project Task 3',
            'completed' => false,
        ]);
    }
}
