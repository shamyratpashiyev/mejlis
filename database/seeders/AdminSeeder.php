<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'admin', 'email' => 'admin@mejlis.gov.tm','password' => Hash::make('PSIsInZhbHVlIjoid0s5czl4OXZqZ256aFg0aElUcXNndz09Ii')]);
    }
}
