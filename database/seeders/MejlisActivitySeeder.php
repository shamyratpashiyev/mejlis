<?php

namespace Database\Seeders;

use App\Models\MejlisActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MejlisActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MejlisActivity::factory(100)->create();
    }
}
