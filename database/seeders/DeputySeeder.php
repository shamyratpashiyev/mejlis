<?php

namespace Database\Seeders;

use App\Models\Deputy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeputySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deputy::factory(50)->create();
    }
}
