<?php

namespace Database\Seeders;

use App\Models\TkmPopulation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkmPopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TkmPopulation::create([
            'title_tm' => 'Ilaty',
            'title_ru' => 'Население',
            'title_en' => 'Population',

            'content_tm' => '<p>
                                  Türkmenistanyň ilaty 6,2 mln. adamdan gowrakdyr. Türkmenistan — köp milletli döwletdir. Ýurtda 100-den gowrak milletleriň we halkyýetleriň wekilleri ýaşaýarlar.
                            </p>',
            'content_ru' => '<p>
                                  Население Туркменистана составляет более 6,2 миллиона человек. Туркменистан – многонациональное государство. В стране проживают представители более 100 наций и народов.
                            </p>',
            'content_en' => '<p>
                                  The population of Turkmenistan is over 6.2 million people. Turkmenistan is a multinational state. Representatives of more than 100 nations and peoples live in the country.
                            </p>',
        ]);
    }
}
