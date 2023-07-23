<?php

namespace Database\Seeders;

use App\Models\DeputyCommittee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeputyCommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeputyCommittee::factory(50)->create();
    }
}
