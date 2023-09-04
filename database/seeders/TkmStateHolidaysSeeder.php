<?php

namespace Database\Seeders;

use App\Models\TkmStateHolidays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkmStateHolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TkmStateHolidays::create([
            'title_tm' => 'Döwlet baýramçylyklary we matam günleri',
            'title_ru' => 'Государственные праздники и траурные дни',
            'title_en' => 'Public holidays and mourning days',

            'content_tm' => '<p>
                                  <strong>Döwletiň esasy döwlet we milli baýramçylyklary : </strong><br><br>
                                 Täze ýyl — 1-nji ýanwar; <br>
                                 Döwlet Baýdagynyň güni — 19-njy fewral; <br>
                                 Halkara zenanlar güni — 8-nji mart; <br>
                                 Milli bahar baýramy (Nowruz) — 21-22-nji mart; <br>
                                 Ýeňiş güni — 9-njy maý; <br>
                                 Konstitusiýa güni we Galkynyş, Agzybirlik we Magtymguly Pyragynyň şygryýet güni — 18-nji maý; <br>
                                 Türkmenistanyň Garaşsyzlyk güni — 27-28-nji oktýabr; <br>
                                 Türkmenistanyň milli baýramy — Bitaraplyk güni — 12-nji dekabr. <br>
                            </p>
                            <br>
                            <p style="color: var(--sky_blue); text-align:justify; font-weight: bold;">
                                   
                                Her ýyl bellenilip geçilýän Gurban baýramynyň we Oraza baýramynyň seneleri Türkmenistanyň Prezidentiniň namalaryna laýyklykda kesgitlenilýär.
                            </p>
                            <br>
                            <p>
                                   <strong> Matam günleri:</strong><br>
                                   Milli ýatlama güni — 6-njy oktýabr.
                            </p> ',

            'content_ru' => '
                            <p>
                                  <strong>Главные государственные и национальные праздники государства: </strong><br><br>
                                 Новый год - 1 января; <br>
                                 День государственного флага - 19 февраля; <br>
                                 Международный женский день - 8 марта; <br>
                                 Национальный праздник весны (Новруз) - 21-22 марта; <br>
                                 День Победы - 9 мая; <br>
                                 День Конституции и День Возрождения, единства и поэзии Махтумкули Фраги - 18 мая; <br>
                                 День независимости Туркменистана - 27-28 октября; <br>
                                 Национальный праздник Туркменистана – День Нейтралитета – 12 декабря. <br>
                            </p>
                            <br>
                            <p style="color: var(--sky_blue); text-align:justify; font-weight: bold;">
                                   
                                Даты проведения ежегодных Курбан Байрам и Ораза Байрам определяются указами Президента Туркменистана.
                            </p>
                            <br>
                            <p>
                                   <strong> Дни траура:</strong><br>
                                   Национальный день памяти - 6 октября.
                            </p>',

            'content_en' => '
                            <p>
                                   <strong>The main state and national holidays of the state: </strong><br><br>
                                  New Year - January 1; <br>
                                  National Flag Day - February 19; <br>
                                  International Women\'s Day - March 8;<br>
                                  National spring holiday (Novruz) - March 21-22; <br>
                                  Victory Day - May 9; <br>
                                  Constitution Day and Day of Revival, Unity and Poetry of Magtymguly Fragi - May 18; <br>
                                  Independence Day of Turkmenistan - October 27-28; <br>
                                  National holiday of Turkmenistan - Day of Neutrality - December 12. <br>
                            </p>
                            <br>
                            <p style="color: var(--sky_blue); text-align:justify; font-weight: bold;">
                                   
                                The dates of the annual Eid al-Adha and Oraza Bayram are determined by decrees of the President of Turkmenistan.
                            </p>
                            <br>
                            <p>
                                   <strong> Days of mourning:</strong><br>
                                  National Day of Remembrance - 6 October.
                            </p>',
        ]);
    }
}
