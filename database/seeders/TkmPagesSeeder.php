<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TkmAvazaSeeder;
use Database\Seeders\TkmSportSeeder;
use Database\Seeders\TkmCultureSeeder;
use Database\Seeders\TkmEconomySeeder;
use Database\Seeders\TkmScienceSeeder;
use Database\Seeders\TkmTourismSeeder;
use Database\Seeders\TkmEducationSeeder;
use Database\Seeders\TkmHealthcareSeeder;
use Database\Seeders\TkmSocialSphereSeeder;
use Database\Seeders\TkmForeignPolicySeeder;
use Database\Seeders\TkmGeneralInformationSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TkmPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TkmAvazaSeeder::class,
            TkmCultureSeeder::class,
            TkmEconomySeeder::class,
            TkmEducationSeeder::class,
            TkmForeignPolicySeeder::class,
            TkmGeneralInformationSeeder::class,
            TkmHealthcareSeeder::class,
            TkmScienceSeeder::class,
            TkmSocialSphereSeeder::class,
            TkmSportSeeder::class,
            TkmTourismSeeder::class
        ]);
    }
}
