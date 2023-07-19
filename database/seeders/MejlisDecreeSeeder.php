<?php

namespace Database\Seeders;

use App\Models\MejlisDecree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejlisDecreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MejlisDecree::factory(20)->create();
    }
}
