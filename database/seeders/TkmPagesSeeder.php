<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TkmAreaSeeder;
use Database\Seeders\TkmHistorySeeder;
use Database\Seeders\TkmPopulationSeeder;
use Database\Seeders\TkmConstitutionSeeder;
use Database\Seeders\TkmStateSymbolsSeeder;
use Database\Seeders\TkmStateHolidaysSeeder;
use App\Http\Controllers\TkmStateHolidaysController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TkmPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TkmAreaSeeder::class,
            TkmHistorySeeder::class,
            TkmPopulationSeeder::class,
            TkmStateSymbolsSeeder::class,
            TkmConstitutionSeeder::class,
            TkmStateHolidaysSeeder::class,
        ]);
    }
}
