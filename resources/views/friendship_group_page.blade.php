@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/friendship_group_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Halkara hyzmatdaşlyk', 'url' => '#'],
                    ['name'=>'Dostluk topar','url' => '#'], 
                    ['name'=>'Täzelikler', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="friendship_group_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Halkara / Dostluk topar
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Halkara"/>

                <div class="middle_column flex_column">
                    <div class="block_title">
                        Daşary ýurt döwletleriniň parlamentleri bilen parlamentara dostluk toparlary
                    </div>

                    <div class="text_block">
                        <h4 class="text_title">Kanunçylyk palatasy beýleki ýurtlaryň parlamentleri we halkara parlamentleri bilen parlamentara hyzmatdaşlygy.</h4>
                        
                        <div class="text_content">
                            <p>
                                &emsp;&ensp; 34-nji madda Kanun çykaryjy palatanyň daşary gatnaşyklary <br>
                                &emsp;&ensp;Kanunçylyk palatasy parlamentler we beýleki ýurtlaryň halkara parlament guramalary bilen parlamentara hyzmatdaşlygy baradaky şertnamalary baglaşýar, beýleki ýurtlaryň parlamentleri we halkara parlament guramalary bilen hyzmatdaşlyk etmek üçin parlamentara toparlary, komissiýalary, komitetleri, iş toparlaryny we beýleki gurluşlary döredýär, resmi parlament alyşýar wekiliýetleri we halkara gatnaşyklaryny pugtalandyrýar. gönükdirilen dürli çäreleri amala aşyrýar (Özbegistan Respublikasynyň 2018-nji ýylyň 18-nji aprelindäki No. ZRU-476 Kanuny bilen üýtgedilen 34-nji maddanyň birinji bölümi - Milli kanunçylyk maglumatlar binýady,
                                19/19/2018, 03/18/476/1087) <br> <br>
                            </p>
                            <p>
                                &emsp;&ensp;Beýleki ştatlaryň parlamentleriniň baştutanlaryna, döwletleriň we hökümet baştutanlaryna, parlament wekiliýetleriniň ýolbaşçylaryna Kanunçylyk palatasynyň mejlisinde olaryň haýyşy boýunça çykyş etmek mümkinçiligi berilip bilner. <br> <br>
                            </p>
                            <p>
                                &emsp;&ensp;341-nji madda Mejlisara toparlar, komissiýalar, komitetler, iş toparlary we hyzmatdaşlyk üçin beýleki gurluşlar. <br> <br>
                            </p>
                            <p>
                                &emsp;&ensp;Kanun çykaryjy palatanyň wekilleriniň arasynda parlamentara toparlar, komissiýalar, komitetler, iş toparlary we beýleki ýurtlaryň parlamentleri we halkara parlament guramalary bilen özara gatnaşyk üçin beýleki gurluşlar döredilýär, düzümi Kanunçylyk Geňeşi tarapyndan tassyklanýar. Palata. <br> <br>
                            </p>
                            <p>
                                &emsp;&ensp;Kanun çykaryjy palata we senat, beýleki ýurtlaryň parlamentleri we halkara parlament guramalary bilen kanun çykaryjy palatanyň wekilleriniň we Senatyň agzalarynyň arasynda parlamentara toparlary, komissiýalary, komitetleri, iş toparlaryny we beýleki gurluşlary bilelikde döredip bilerler. düzümi Kanunçylyk palatasynyň bilelikdäki karary bilen tassyklanýar. <br> <br>
                            </p>
                            <p>
                                &emsp;&ensp;Mejlisara toparlaryň, komissiýalaryň, komitetleriň, iş toparlarynyň we hyzmatdaşlygyň beýleki gurluşlarynyň işiniň tertibi Kanunçylyk palatasynyň geňeşiniň we Senatyň geňeşiniň bilelikdäki karary bilen kesgitlenýär. <br> <br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="right_column flex_column">
                    <span class="item">Межпарламентская группа Законодательной палаты Меджлиса Туркменистан по сотрудничеству с Лок сабха Парламента Индии</span>
                    <span class="item">Межпарламентская группа Меджлиса Туркменистан по сотрудничеству с Государственной Думой Федерального Собрания Российской Федерации</span>
                    <span class="item">Межпарламентская группа Меджлиса Туркменистан по сотрудничеству с Маджлиси намояндагон Маджлиси Оли Республики Таджикистан</span>
                    <span class="item">Межпарламентская группа Меджлиса Туркменистан по сотрудничеству с Национальной ассамблеей Парламента Пакистана</span>
                    <span class="item">Межпарламентская группа Меджлиса Туркменистан по сотрудничеству с Палатой депутатов Парламента Италии</span>
                </div>
            </div>
        </div>
    </div>
    
@endsection