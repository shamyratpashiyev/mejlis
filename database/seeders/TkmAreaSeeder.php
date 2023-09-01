<?php

namespace Database\Seeders;

use App\Models\TkmArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkmAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TkmArea::create([
            'title_tm' => 'Meýdany',
            'title_ru' => 'Площадь',
            'title_en' => 'Area',

            'content_tm' => '<p>
                                  Türkmenistan– Merkezi Aziýanyň bäş ýurdunyň biri bolup, onuň meýdany boýunça olaryň arasynda ikinji orny eýeleýär, ýagny Türkmenistanyň tutýan meýdany 491,21 müň km2 deňdir.
                            </p>
                            <p>
                                  Onuň günbatardan gündogara 1100 km. we demirgazykdan günorta 650 km. uzaýar.
                            </p>
                            <p>
                                  Türkmenistan demirgazykda Gazagystan Respublikasy, demirgazyk–gündogarda we gündogarda Özbegistan Respublikasy bilen, günorta-gündogarda Owganystan Yslam Respublikasy bilen, günortada Eýran Yslam Respublikasy bilen serhetleşýär. Şeýle hem günbatarda Hazar deňzi tebigy serhedi bolmak bilen Azerbaýjan Respublikasy bilen hem serhetleşýär.
                            </p>',
            'content_ru' => '<p>
                                  Туркменистан входит в пятерку стран Центральной Азии, и занимает среди них второе место по площади, то есть площадь Туркменистана равна 491,21 тыс. км2.
                            </p>
                            <p>
                                  Его протяженность с запада на восток 1100 км. и 650 км с севера на юг.
                            </p>
                            <p>
                                  Туркменистан граничит с Республикой Казахстан на севере, Республикой Узбекистан на северо-востоке и востоке, Исламской Республикой Афганистан на юго-востоке и Исламской Республикой Иран на юге. На западе Каспийское море является естественной границей и граничит с Азербайджанской Республикой.
                            </p>',
            'content_en' => '<p>
                                  Turkmenistan is among the five countries of Central Asia, and ranks second among them in terms of area, that is, the area of ​​Turkmenistan is 491.21 thousand km2.
                            </p>
                            <p>
                                  Its length from west to east is 1100 km. and 650 km from north to south.
                            </p>
                            <p>
                                  Turkmenistan borders the Republic of Kazakhstan in the north, the Republic of Uzbekistan in the northeast and east, the Islamic Republic of Afghanistan in the southeast, and the Islamic Republic of Iran in the south. In the west, the Caspian Sea is a natural border and borders on the Republic of Azerbaijan.
                            </p>',
        ]);
    }
}
