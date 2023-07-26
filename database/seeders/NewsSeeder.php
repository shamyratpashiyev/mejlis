<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsCooperation;
use App\Models\NewsInternational;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::factory(100)->create();
        NewsCooperation::factory(100)->create();
        NewsInternational::factory(100)->create();
    }
}
