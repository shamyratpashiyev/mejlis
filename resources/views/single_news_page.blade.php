@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_news_page.css') }}">
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
    <div class="single_news_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Media / Habarlar
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Habarlar"/>

                <div class="news_content_block flex_column">
                    <div class="image_wrapper flex_row">
                        <img src="{{ asset('img/single_news.jpg') }}" alt="">
                    </div>

                    <div class="date_row flex_row">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>
                        <span class="date">22.05.2023</span>
                    </div>

                    <h2 class="news_title">«Ak şäherim Aşgabat» atly XXII köpugurlyhalkara sergä gatnaşyjylara</h2>

                    <div class="news_text">
                        <p>
                            &emsp;&emsp;Hormatly sergä gatnaşyjylar!<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Sizi Berkarar döwletiň täze eýýamynyň Galkynyşy döwründe ýurdumyzyň paýtagtynyň gazananlaryny dünýä ýaýmak maksady bilen geçirilýän «Ak şäherim Aşgabat» atly XXII köpugurly halkara serginiň öz işine başlamagy bilen tüýs ýürekden gutlaýaryn. Arkadag Serdarly bagtyýar ýaşlar ýylynda Aşgabat şäheriniň gününe bagyşlanyp geçirilýän giň gerimli çäreler aýratyn many-mazmuna eýe bolup, türkmen paýtagtynyň ýaşaýjylary üçin guwandyryjy wakalara öwrülýär. «Ak şäherim Aşgabat» atly XXII köpugurly halkara sergi hem ak mermerli şäherimiziň güni mynasybetli geçirilýär. Onda Aşgabadyň senagat, medeni we aň-bilim kuwwaty, durmuş-ykdysady taýdan örän uly möçberli serişdeleri, mümkinçilikleri bilen tanyşdyrylar. Ýurdumyzyň halk hojalygyna degişli dürli pudaklaryň täze teklipleri we gazananlary görkeziler.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Ak mermerli Aşgabadyň üstünliklerini dünýä jemgyýetçiligine ýaýmak, bu ugurda daşary ýurtly hyzmatdaşlar bilen tejribe alyşmak maksady bilen geçirilýän bu halkara serginiň türkmen paýtagtyny has-da gözelleşdirmek, dünýäniň iň owadan hem-de ýaşamak üçin iň amatly şäherleriniň birine öwürmek boýunça işleriň has-da ilerlemeginde ähmiýetiniň uly boljakdygyna ynanýaryn. Indi köp ýyllar bäri guralýan «Ak şäherim Aşgabat» atly köpugurly halkara sergi Aşgabadyň keşbinde öz beýanyny tapýan özgertmeleriň gerimini aýdyň görkezýär. Dürli ulgamlarda ýetilen belent sepgitleri beýan etmäge mümkinçilik berýär we halkara hyzmatdaşlygy has-da pugtalandyrýar. Aşgabat şäheriniň güni mynasybetli geçirilýän bu sergi aşgabatlylarda hem-de paýtagtymyzyň myhmanlarynda ýatdan çykmajak täsirleri galdyrýar.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Häzirki döwürde Aşgabat dünýäniň durnukly ösýän şäherleriniň birine öwrüldi. Her ýyl geçirilýän «Ak şäherim Aşgabat» atly halkara sergide hödürlenilýän taslamalaryň aglabasy boýunça bu günki gün şäherimizi bezeýän ajaýyp binalaryň ençemesi guruldy. Täze önümçilik, medeni-durmuş, ylym-bilim, saglyk we sport desgalary, döwrebap ýaşaýyş jaýlary diňe bir ak şäherimiziň görküne görk goşmak bilen çäklenmän, eýsem, ilatymyzyň ýaşaýyş-durmuş şertleriniň gowulanmagynda, halkymyza edilýän durmuş hyzmatlarynyň ýokary hilli bolmagynda hem möhüm orna eýe bolýar. «Aziýanyň merjen şäheri» diýen ykrarnama eýe bolan paýtagtymyzda amala aşyrylýan ägirt uly gurluşyklar türkmenistanlylaryň abadan we bagtyýar durmuşyny üpjün etmäge gönükdirilen döredijilikli, durmuş ugurly döwlet syýasatymyzyň aýdyň netijesidir. Ak mermerli Aşgabat ýurdumyzyň kuwwatynyň artýandygynyň, dowam edýän özgertmeleriň üstünliklere eýe bolýandygynyň nyşanydyr. Aşgabat dünýäniň iň gözel we has oňaýly şäherleriniň biri hökmünde öz derejesini barha berkidýär. Baş şäherimiziň ösdürilmegi uzak möhletli geljegi nazara almak bilen, täzeçil şähergurluşyk syýasatymyzyň esasy ugurlarynyň biri bolup durýar.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Hormatly adamlar!<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Gadyrly dostlar!<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Biz paýtagtymyzyň häzirki döwürde gazanan üstünliklerine, ajaýyp binagärlik keşbine buýsanýarys. Ýurdumyzyň ýüregi bolan şäherimiz syýasy-dolandyryş, ylmy, medeni, senagat, söwda, ulag merkezi bolmak bilen, uly ykdysady we ylmy mümkinçiliklere hem eýedir. Şoňa görä-de, Arkadag Serdarly bagtyýar ýaşlar ýylynda Aşgabat şäherinde döwrebap edara binalarynyň, ýaşaýyş jaý toplumlarynyň, umumybilim berýän orta mekdepleriň, çagalar baglarynyň, hassahanalaryň, saglyk öýleriniň, söwda merkezleriniň, ilata hyzmat ediş desgalarynyň, inženerçilik ulgamlarynyň we ýollaryň, ýaşaýjylaryň dynç almagy üçin niýetlenen seýilgähleriň gurulmagy işjeň alnyp barlar.<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Aşgabat şäheri halkara derejedäki syýasy we işewürlik merkezine hem öwrülýär. Döwrebap desgalary bilen haýrana goýýan paýtagtymyz bütin dünýäde parahatçylygyň, ylalaşygyň, halklaryň arasynda dostlugyň hakyky merkezi hökmünde ykrar edildi. Dünýäniň şäherleriniň arasynda halkara hyzmatdaşlygy ösdürmek maksady bilen, Birleşen Milletler Guramasynyň Bilim, ylym we medeniýet meseleleri boýunça guramasy bilen hyzmatdaşlygyň çäklerinde «Dizaýn» ugry boýunça Aşgabat şäherini ÝUNESKO-nyň döredijilik şäherleriniň toruna girizmek babatda hem zerur çäreler amala aşyrylar. Garaşsyz, Bitarap türkmen döwletiniň paýtagtynyň ýurduň dolandyryş, senagat, bilim, medeniýet merkezi hökmünde ösmegini dowam etdirip, ýetilýän belent sepgitleriň gerimini has-da giňeltjekdigine berk ynanýaryn.<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Hormatly sergä gatnaşyjylar!<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Gadyrly myhmanlar!<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Sizi Arkadag Serdarly bagtyýar ýaşlar ýylynda geçirilýän «Ak şäherim Aşgabat» atly XXII köpugurly halkara serginiň öz işine başlamagy bilen ýene-de bir gezek tüýs ýürekden gutlaýaryn. Size berk jan saglyk, maşgala abadançylygyny, asuda we bagtyýar durmuş, berkarar döwletimiziň paýtagtyny has-da ösdürmek ugrunda alyp barýan işleriňizde uly üstünlikleri arzuw edýärin.<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Türkmenistanyň Prezidenti<br><br>
                        </p>

                        <p>
                            &emsp;&emsp;Serdar BERDIMUHAMEDOW.<br><br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="related_news_block flex_column">

                <h3 class="block_title">Meňzeş habarlar</h3>

                <div class="news_row flex_row">
                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_4.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Özbegistan Respublikasynyň Prezidentini gutlady</h4>
                            <p class="content">
                                Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow Özbegistan Respublikasynyň Prezidenti 
                                Şawkat Mirziýoýewe Özbegistanyň Konstitusiýasyna üýtgetmeleri we goşmaçalary girizmek boýunça sala salşygyň üstünlikli geçirilmegi 
                                mynasybetli tüýs ýürekden çykýan gutlaglaryny beýan etdi.
                            </p>
                            <span class="date">01.05.2023</span>
                        </div>
                    </a>

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_3.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmenistanyň Prezidenti sanly ulgam arkaly iş maslahatyny geçirdi</h4>
                            <p class="content">
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Ministrler Kabinetiniň Başlygynyň 
                                obasenagat toplumyna gözegçilik edýän orunbasary A.Ýazmyradowyň, ýurdumyzyň welaýatlarynyň 
                                häkimleriniň we Ministrler Kabinetiniň Başlygynyň orunbasary,
                            </p>
                            <span class="date">01.05.2023</span>
                        </div>
                    </a>

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_4.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Özbegistan Respublikasynyň Prezidentini gutlady</h4>
                            <p class="content">
                                Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow Özbegistan Respublikasynyň Prezidenti 
                                Şawkat Mirziýoýewe Özbegistanyň Konstitusiýasyna üýtgetmeleri we goşmaçalary girizmek boýunça sala salşygyň üstünlikli geçirilmegi 
                                mynasybetli tüýs ýürekden çykýan gutlaglaryny beýan etdi.
                            </p>
                            <span class="date">01.05.2023</span>
                        </div>
                    </a>

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_5.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygynyň Özbegistan Respublikasynyň Prezidenti bilen telefon arkaly söhbetdeşligi</h4>
                            <p class="content">
                                Şu gün türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow bilen Özbegistan 
                                Respublikasynyň Prezidenti Şawkat Mirziýoýewiň arasynda bolan telefon arkaly söhbetdeşlikde iki halkyň
                            </p>
                            <span class="date">15.04.2023</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection