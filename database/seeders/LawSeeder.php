<?php

namespace Database\Seeders;

use App\Models\Law;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Law::factory(20)->create();
    }
}
