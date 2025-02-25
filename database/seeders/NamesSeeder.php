<?php

namespace Database\Seeders;

use App\Models\Names;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Names::factory()->count(10)->create();
    }
}
