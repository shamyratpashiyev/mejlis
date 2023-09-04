<?php

namespace Database\Seeders;

use App\Models\TkmStateSymbols;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TkmStateSymbolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TkmStateSymbols::create([
            'flag_title_tm' => 'Türkmenistanyň dowlet baýdagy',

            'flag_title_ru' => 'Государственный флаг Туркменистана',
            'flag_title_en' => 'State flag of Turkmenistan',
            'flag_img' => '',
            'flag_text_tm' => '<p>
                                      Türkmenistanyň Döwlet baýdagy milletiň agzybirliginiň we Garaşsyzlygynyň hem-de döwlet Bitaraplygynyň nyşanydyr.
                                </p>
                                <p>
                                      2008-nji ýylyň 29-njy iýunynda Aşgabat şäherinde Ginnesiň Bütindünýä rekordlar kitabyna girizilen dünýäde iň belent 133 metrlik flagştokda uzynlygy 52,5 we ini 35 metre, agramy bolsa 420 kilograma barabar ägirt uly Döwlet baýdagy dikeldildi.
                                </p>
                                ',
            'flag_text_ru' => '<p>
                                      Государственный флаг Туркменистана является символом национального единства и независимости, а также государственного нейтралитета.
                                </p>
                                <p>
                                      29 июня 2008 года в Ашхабаде на самом высоком в мире флагштоке высотой 133 метра был восстановлен огромный национальный флаг длиной 52,5 метра и шириной 35 метров и весом 420 килограммов, который был внесен в Книгу мировые рекордов Гиннесса.
                                </p>
                                ',
            'flag_text_en' => '<p>
                                      The national flag of Turkmenistan is a symbol of national unity and independence, as well as state neutrality.
                                </p>
                                <p>
                                      On June 29, 2008, in Ashgabat, on the world\'s highest flagpole with a height of 133 meters, a huge national flag which is 52.5 meters long and 35 meters wide and weighing 420 kilograms was restored, which was included in the Guinness Book of World Records.
                                </p>
                                ',
            'emblem_title_tm' => 'Türkmenistanyň döwlet tugrasy',
            'emblem_title_ru' => 'Государственный герб Туркменистана',
            'emblem_title_en' => 'State Emblem of Turkmenistan',
            'emblem_img' => '',
            'emblem_text_tm' => '<p>
                                      Türkmenistanyň döwlet häkimiýetiniň nyşany hökmünde türkmen halkynyň nesilbaşylary Beýik Oguzhan Türkmeniň we kuwwatly döwletleri döreden hem-de adamzadyň ösüşine düýpli täsirini ýetiren Beýik seljuklaryň gadymy medeni mirasyny özünde jemlän Türkmenistanyň Döwlet TugrasyTürkmenistanyň Döwlet häkimiýetiniň nyşanydyr.
                                </p>',
            'emblem_text_ru' => '<p>
                                      Являясь символом государственной власти Туркменистана, Государственный герб Туркменистана, содержащая древнее культурное наследие великих туркмен-огузов, предков туркменского народа, и Великих Сельджуков, создавших могущественные государства и оказавших значительное влияние на развития человечества, является символом государственной власти Туркменистана.
                                </p>',
            'emblem_text_en' => '<p>
                                      As a symbol of the state power of Turkmenistan, the State Emblem of Turkmenistan, which contains the ancient cultural heritage of the great Turkmen Oghuz, the ancestors of the Turkmen people, and the Great Seljuks, who created powerful states and had a significant impact on the development of mankind, is a symbol of the state power of Turkmenistan.
                                </p>',
            'anthem_description_title_tm' => 'Garaşsyz, baky bitarap Türkmenistanyň döwlet senasy',
            'anthem_description_title_ru' => 'Государственный гимн независимого, постоянно нейтрального Туркменистана',
            'anthem_description_title_en' => 'State anthem of independent, permanently neutral Turkmenistan',
            'anthem_description_text_tm' => '<p>
                                                  Türkmenistanyň Döwlet senasy garaşsyz, bitarap Türkmenistanyň döwlet nyşanydyr we ol türkmen milletiniň agzybirligini hem-de jebisligini janlandyryp görkezýär.
                                            </p>
                                            <p>
                                                  Türkmenistanyň Döwlet senasynyň şu Kanuny bozmak bilen ýerine ýetirilmegi ýa-da peýdalanylmagy, şeýle hem Türkmenistanyň Döwlet senasynyň hormatynyň gaçyrylmagy Türkmenistanyň kanunçylygyna laýyklykda jogapkärçilige eltýär.
                                            </p>
                                            ',
            'anthem_description_text_ru' => '<p>
                                                  Государственный гимн Туркменистана является государственным символом независимого, нейтрального Туркменистана, символизирует единство и целостность туркменского народа.
                                            </p>
                                            <p>
                                                  Исполнение либо использование Государственного гимна Туркменистана в нарушение этого Закона, а также глумление над Государственным гимном Туркменистана влекут за собой ответственность в соответствии с законодательством Туркменистана.
                                            </p>
                                            ',
            'anthem_description_text_en' => '<p>
                                                  The national anthem of Turkmenistan is the state symbol of independent, neutral Turkmenistan, symbolizes the unity and integrity of the Turkmen people.
                                            </p>
                                            <p>
                                                  The performance or use of the National Anthem of Turkmenistan in violation of this Law, as well as mockery of the National Anthem of Turkmenistan, entails liability in accordance with the legislation of Turkmenistan.
                                            </p>
                                            ',
            'anthem_title_tm' => 'Türkmenistanyň döwlet senasy',
            'anthem_title_ru' => 'Государственный гимн Туркменистана',
            'anthem_title_en' => 'State anthem of Turkmenistan',
            'anthem_text_tm' => '<p>
                                    Janym gurban saňa, erkana ýurdum, <br>
                                    Mert pederleň ruhy bardyr köňülde.<br>
                                    Bitarap, garaşsyz topragyň nurdur,<br>
                                    Baýdagyň belentdir dünýäň öňünde.<br>
                                    <br>                 
                                    Gaýtalama:<br>
                                    Halkyň guran Baky beýik binasy,<br>
                                    Berkarar döwletim, jigerim-janym.<br>
                                    Başlaryň täji sen, diller senasy,<br>
                                    Dünýä dursun, sen dur, Türkmenistanym!<br>
                                    <br>
                                    Gardaşdyr tireler, amandyr iller,<br>
                                    Owal-ahyr birdir biziň ganymyz.<br>
                                    Harasatlar almaz, syndyrmaz siller,<br>
                                    Nesiller döş gerip gorar şanymyz.<br>
                                    <br>
                                    Gaýtalama:<br>
                                    Halkyň guran Baky beýik binasy,<br>
                                    Berkarar döwletim, jigerim-janym.<br>
                                    Başlaryň täji sen, diller senasy,<br>
                                    Dünýä dursun, sen dur, Türkmenistanym!<br>
                                </p>',
            'anthem_text_ru' => '<p>
                                    Жизнь отдать я готов за родимый очаг, -<br>
                                    Духом предков отважных славны сыны,<br>
                                    Земля моя свята. В мире реет мой флаг –<br>
                                    Символ великой нейтральной страны!<br>
                                    <br>                 
                                    Повтор:<br>
                                    Великое создание Народа,<br>
                                    Держава родная, суверенный край,<br>
                                    Туркменистан – светоч и песня души,<br>
                                    Во веки веков ты живи, процветай!<br>
                                    <br>
                                    Един мой народ, и по жилам племен<br>
                                    Течет предков кровь – нетленная весть,<br>
                                    Не страшны нам бури, невзгоды времен,<br>
                                    Сохраним и умножим славу и честь!<br>
                                    <br>
                                    Повтор:<br>
                                    Великое создание Народа,<br>
                                    Держава родная, суверенный край,<br>
                                    Туркменистан – светоч и песня души,<br>
                                    Во веки веков ты живи, процветай!<br>
                                </p>',
            'anthem_text_en' => '<p>
                                    I am ready to give my life for you, my land<br> 
                                    Our brave forefathers have a spirit in their heart,<br> 
                                    That is the light of a neutral, independent land<br> 
                                    The flag flies high in front of the world.<br> 
                                    <br>                 
                                    Chorus:<br>
                                    The eternally great creation built by the people<br>
                                    My strong state, my sovereign land.<br>
                                    You are the light and song of the soul<br>
                                    Long live and prosper, my Turkmenistan!<br>
                                    <br>
                                    The tribes of my nation are unified<br>
                                    Our ancestors\' undying blood flows.<br>
                                    In storms and unfortunate times, we are not afraid<br>
                                    Generations will gather to protect our glory.<br>
                                    <br>
                                    Chorus:<br>
                                    The eternally great creation built by the people<br>
                                    My strong state, my sovereign land.<br>
                                    You are the light and song of the soul<br>
                                    Long live and prosper, my Turkmenistan!<br>
                                </p>',
        ]);
    }
}
