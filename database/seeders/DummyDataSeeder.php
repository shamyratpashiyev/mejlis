<?php

namespace Database\Seeders;

use App\Models\Law;
use App\Models\Code;
use App\Models\News;
use App\Models\Deputy;
use App\Models\Article;
use App\Models\Committee;
use App\Models\MejlisDecree;
use App\Models\MejlisActivity;
use App\Models\DeputyCommittee;
use App\Models\FriendshipGroup;
use App\Models\NewsCooperation;
use Illuminate\Database\Seeder;
use App\Models\NewsInternational;
use App\Models\FriendshipGroupDeputy;
use Database\Seeders\ElectionDistrictSeeder;
use Database\Factories\FriendshipGroupDeputyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
           ElectionDistrictSeeder::class,
        ]);
        Article::factory(100)->create();
        MejlisActivity::factory(100)->create();
        Code::factory(100)->create();
        Law::factory(100)->create();
        MejlisDecree::factory(100)->create();
        FriendshipGroup::factory(10)->create();
        News::factory(200)->create();
        NewsCooperation::factory(100)->create();
        NewsInternational::factory(100)->create();
        Deputy::factory(50)->create();
        Committee::factory(10)->create();
        DeputyCommittee::factory(50)->create();
        FriendshipGroupDeputy::factory(50)->create();
    }
}
