<?php

namespace Database\Seeders;

use App\Models\FriendshipGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FriendshipGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FriendshipGroup::factory(10)->create();
    }
}
