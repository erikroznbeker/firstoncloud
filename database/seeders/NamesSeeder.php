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
        $names = [
            'John Doe',
            'Jane Doe',
            'Test User',
            'Test User2',
        ];
        foreach ($names as $name) {
            Names::create([
                'name' => $name,
            ]);
        }
    }
}
