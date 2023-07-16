@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_activity_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Täzelikler', 'url' => '#'],
                    ['name'=>'Çykyşlar we makalalar','url' => '#'], 
                    ['name'=>'Türkmenistanyň mejlisinde alnyp barylýan işler', 'url' => '#'],
                    ['name'=>'Galereýa', 'url' => '#'],
                ]
@endphp

@section('content')
    <div class="single_activity_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Media / Türkmenistanyň mejlisinde alnyp barylýan işler
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Habarlar"/>

                <div class="activity_content_block flex_column">

                    <div class="date_row flex_row">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>
                        <span class="date">27.05.2023</span>
                    </div>

                    <div class="text_block">
                        
                        <h3 class="text_title">TARYHY MEJLIS: täze ösüşleriň başlangyjy</h3>

                        <p> 
                            <em>
                                &emsp;&emsp;Gahryman Arkadagymyzyň ýolbaşçylygynda Türkmenistanyň Halk Maslahatynyň 20-nji aprelde geçirilen mejlisi, sözüň doly manysynda, taryhy waka öwrüldi. Bu mejlisden gelip çykýan wezipeler Türkmenistanyň Mejlisiniň, Halk Maslahatynyň we Demokratik partiýanyň wekilleriniň şu hepdäniň başynda welaýatymyzda geçiren maslahatlarynda ara alnyp maslahatlaşyldy.
                                <br><br>
                                &emsp;&emsp;Şol maslahatlara gatnaşan ildeşlerimiz özlerinde galan täsirlerini şeýle sözler bilen paýlaşdylar:
                                <br><br>
                            </em>
                        </p>

                        <p>
                            <strong>
                                &emsp;&emsp;Ahmet BAZAROW,<br><br>
                                &emsp;&emsp;Seýitnazar Seýdi adyndaky Türkmen döwlet mugallymçylyk institutynyň kafedra müdiriniň wezipesini ýerine ýetiriji, welaýat halk maslahatynyň başlygy:
                                <br><br>
                            </strong>
                        </p>
                        
                        <p>
                            &emsp;&emsp;― Türkmenistanyň Mejlisiniň Başlygynyň, Halk Maslahatynyň Diwanynyň iş dolandyryjysynyň we Demokratik partiýanyň başlygynyň ýokary okuw mekdepleriniň professor mugallymlary bilen bilelikde welaýat häkimliginde geçiren duşuşygy diýseň täsirli boldy. Onda Gahryman Arkadagymyzyň taryhy mejlisde eden çykyşyndan ugur alnyp, welaýat, etrap, şäher halk maslahatlarynyň öňünde durýan wezipeler has aýdyňlaşdyryldy.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Milli Liderimiziň ýolbaşçylygynda indi birnäçe ýyldan bäri Türkmenistanyň Halk Maslahatynyň işi yzygiderli kämilleşdirilýär. Bu bolsa Halk Maslahatynyň ykballary özgerdiji gurama öwrülmegine şert döredýär. Milli döwlet dolandyryşymyzyň aýratynlygyna öwrülen Halk Maslahatynyň işine dahylly bolmak biziň borjumyzy has artdyrýar.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Welaýat häkimliginde edilen çykyşlarda hem nygtalyşy ýaly, welaýat, etrap, şäher halk maslahatlaryny ýygy-ýygydan çagyryp, olarda ilatyň gyzyklanýan meselelerini içgin öwrenmek we iň degerlilerini Türkmenistanyň Halk Maslahatynyň geljekki mejlislerinde seretmek üçin hödürlemek işlerini alyp barmak biziň esasy borjumyz bolup durýar.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Welaýatymyzda geçirilen maslahatlarda öňümizde goýlan wezipelerden ugur alyp, sakasynda Gahryman Arkadagymyz, Arkadagly Serdarymyz duran beýik özgertmeleri ilatyň arasynda wagyz etmek, Halk Maslahatynyň işini mundan beýläk hem netijeli alyp barmaga goşant goşmak üçin yhlas edip zähmet çekjekdigimize ynandyrýarys.
                            <br><br>
                        </p>
                        <p>
                            <strong>
                                &emsp;&emsp;Allaýar OMAROW,<br><br>
                                &emsp;&emsp;Dänew etrabynyň maliýe we ykdysadyýet bölüminiň esasy hünärmeni, Türkmenistanyň Mejlisiniň deputaty:<br><br>
                            </strong>
                        </p>

                        <p>
                           &emsp;&emsp; ― Dänew etrabyndaky medeniýet öýünde geçirilen maslahatda Gahryman Arkadagymyzyň Türkmenistanyň Halk maslahatynyň mejlisinde eden taryhy çykyşyndan gelip çykýan wezipeler barada birin-birin durlup geçildi. Şol wezipeler öz saýlawçylarymyz bilen ýygy-ýygydan duşuşyp, eziz Arkadagymyzyň başlyklyk etmeginde geçirilen taryhy mejlisde orta atylan başlangyçlary wagyz etmekden başlaýar. Geljekde täze kabul edilýän kanunçylyk namalaryny düşündirip, saýlawçylarymyzyň gyzyklanýan meselelerini, olaryň erk-isleglerini öwrenmek, täze üstünliklere ruhlandyrmak işleri yzygiderli dowam etdiriler. Bu işlerde bize uly Halypa bolup durýan Gahryman Arkadagymyza we Arkadagly Serdarymyza tüýs ýürekden hoşallygymyzy bildirýäris.
                           <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Goý, döwletli Diýarymyzda, ajap döwrümizde alnyp barylýan il-ýurt bähbitli işler rowaçlyklara beslensin!
                            <br><br>
                        </p>

                        <p>
                            <strong>
                                &emsp;&emsp;Bäşim AKYÝEW,<br><br>
                                &emsp;&emsp;Türkmenistanyň Demokratik partiýasynyň Saýat etrap komitetiniň bölüm müdiri:<br><br>
                            </strong>
                        </p>

                        <p>
                           &emsp;&emsp; — Türkmenistanyň Halk Maslahatynyň 20-nji aprelde geçirilen taryhy mejlisinden gelip çykýan wezipeleri halk köpçüliginiň arasynda giňden wagyz etmäge bagyşlanyp, Saýat etrabynyň Garabekewül şäher medeniýet öýünde geçirilen maslahat hem diýseň täsirli boldy.
                           <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Maslahatda edilen çykyşlarda Türkmenistanyň Halk Maslahatynyň işiniň käbir esasy ugurlary barada aýdylyp, döwletimizi hem-de jemgyýetimizi ösdürmekde her birimiziň öňümizde durýan anyk wezipelere üns çekildi. Şeýle hem myhmanlar raýat jemgyýetini ösdürmäge degişli işleri yzygiderli dowam etdirmegi, hormatly Prezidentimiziň alyp barýan döwlet syýasatyny halkyň arasynda wagyz etmegi, ilatyň durmuş üpjünçiligi meseleleriniň ýerine ýetiriji häkimiýetiň ýerli edaralarynyň, welaýat, etrap, şäher halk maslahatlarynyň elmydama üns merkezinde bolmalydygyny nygtadylar. Maslahatda ýurdumyzda ýaşlaryň kämil bilim almaklary, halkymyza we Watanymyza mynasyp nesiller bolup ýetişmekleri ugrunda edilýän taýsyz tagallalar dogrusynda hem buýsançly çykyşlar diňlenildi.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Ildeşlerimiz Arkadag Serdarly bagtyýar ýaşlar ýylynda ýurdumyzyň syýasy-jemgyýetçilik durmuşyndaky möhüm işlere mynasyp goşantlaryny goşjakdyklaryny, ilatyň, esasan hem, ýaşlaryň arasynda her bir adamyň bagtyýar durmuşda ýaşamagyna gönükdirilen döwletimiziň ynsanperwer syýasatyny, milli kanunçylygymyzy wagyz etmäge işjeň gatnaşjakdyklaryny aýtdylar.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection