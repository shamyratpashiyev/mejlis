<?php

namespace Database\Seeders;

use App\Models\TkmHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkmHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TkmHistory::create([
            'title_tm' => 'Taryhy',
            'title_ru' => 'История',
            'title_en' => 'History',

            'content_tm' => '<p>
                                  Türkmenistan 1991-nji ýylyň 27-nji oktýabrynda Garaşsyz döwlet boldy we şondan bäri bu sene ýurtda Garaşsyzlyk güni hökmünde bellenilýär. 1995-nji ýylyň 12-nji dekabrynda 185 döwletiň biragyzdan goldamagy bilen, Birleşen Milletler Guramasynyň Baş Assambleýasynyň Rezolýusiýasy bilen hemişelik Bitarap döwlet diýlip ykrar edildi. Häzirki wagtda Türkmenistan 142 döwlet bilen diplomatik gatnaşyklary ýola goýdy.
                            </p>',
            'content_ru' => '<p>
                                  Туркменистан стал независимым государством 27 октября 1991 года, и с тех пор эта дата отмечается в стране как День независимости. 12 декабря 1995 года при единодушной поддержке 185 стран резолюцией Генеральной Ассамблеи ООН он был признан постоянным нейтральным государством. В настоящее время Туркменистан установил дипломатические отношения со 142 странами.
                            </p>',
            'content_en' => '<p>
                                  Turkmenistan became an independent state on October 27, 1991, and since then this date has been celebrated in the country as Independence Day. On December 12, 1995, with the unanimous support of 185 countries, by a resolution of the UN General Assembly, it was recognized as a permanent neutral state. Currently, Turkmenistan has established diplomatic relations with 142 countries.
                            </p>',
        ]);
    }
}
