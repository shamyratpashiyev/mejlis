<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\LawSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\CodesSeeder;
use Database\Seeders\DeputySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $this->call([
            DeputySeeder::class,
            CommitteeSeeder::class,
            CodesSeeder::class,
            LawSeeder::class,
        ]);
    }
}
