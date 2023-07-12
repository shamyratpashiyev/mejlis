@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

@section('content')
<div class="sections_container">

    <div class="news_section_main flex_row">
        <div class="inner_wrapper flex_column">
            <div class="title_row flex_row">
                <h2 class="title">Habarlar</h2>
                <a href="#" class="news_page_link hover_underline flex_row">
                    <span>Hemmesi</span>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="grid_block">

                <a href="#" class="news_container_big flex_column">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_big.jpg') }}" alt="">
                    </div>
                    <h3 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Türkiýe Respublikasynyň Prezidentine hat iberdi</h3>
                    <p  class="content">
                        Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow Türkiýe Respublikasynyň Prezidenti 
                        Rejep Taýyp Ärdogana iberen hatynda Türkmenistana we onuň halkyna hakyky dostluk gatnaşygy üçin hormatyny we minnetdarlygyny beýan
                    </p>
                    <span class="date">14.03.2023</span>
                </a>

                <div class="news_block_scroll flex_column">

                    <a href="#" class="news_container_small flex_row">
                        <div class="image_wrapper flex_row">
                            <img src="{{ asset('img/news_small.jpg') }}" alt="">
                        </div>
                        <div class="content_block flex_column">
                            <h4 class="title">«Halkara ulag-üstaşyr geçelgeleri: özara arabaglanyşyk we ösüş — 2023» atly II halkara maslahata we sergä gatnaşyjylara</h4>
                            <p class="content">
                                Sizi Berkarar döwletiň täze eýýamynyň Galkynyşy döwrüniň Arkadag Serdarly bagtyýar ýaşlar ýylynda «Halkara ulag-üstaşyr geçelgeleri: 
                                özara arabaglanyşyk we ösüş — 2023»
                            </p>
                            <span class="date">14.03.2023</span>
                        </div>
                    </a>

                    <a href="#"  class="news_container_small flex_row">
                        <div class="image_wrapper flex_row">
                            <img src="{{ asset('img/news_small_2.jpg') }}" alt="">
                        </div>
                        <div class="content_block flex_column">
                            <h4 class="title">Türkmenistanyň Prezidenti Polşa Respublikasynyň Prezidentini gutlady</h4>
                            <p class="content">
                                Hormatly Prezidentimiz Serdar Berdimuhamedow Polşa Respublikasynyň Prezidenti Anjeý Duda 
                                Polşa Respublikasynyň milli baýramy — Konstitusiýa güni mynasybetli tüýs ýürekden gutlaglaryny we iň gowy arzuwlaryny iberdi.
                            </p>
                            <span class="date">14.03.2023</span>
                        </div>
                    </a>

                    <a href="#"  class="news_container_small flex_row">
                        <div class="image_wrapper flex_row">
                            <img src="{{ asset('img/news_small_3.jpg') }}" alt="">
                        </div>
                        <div class="content_block flex_column">
                            <h4 class="title">Bedew bady bilen ösüşiň täze belentliklerine tarap</h4>
                            <p class="content">
                                Geçen hepdede ýurdumyzda halkymyzyň jebisligini, häzirki nesliň pederlerimiziň ruhy gymmatlyklaryna 
                                ygrarlydygyny alamatlandyran Türkmen bedewiniň milli baýramy dabaraly ýagdaýda bellenildi. Halkymyzyň buýsanjy, milli baýlygy,
                            </p>
                            <span class="date">14.03.2023</span>
                        </div>
                    </a>

                    <a href="#"  class="news_container_small flex_row">
                        <div class="image_wrapper flex_row">
                            <img src="{{ asset('img/news_small.jpg') }}" alt="">
                        </div>
                        <div class="content_block flex_column">
                            <h4 class="title">«Halkara ulag-üstaşyr geçelgeleri: özara arabaglanyşyk we ösüş — 2023» atly II halkara maslahata we sergä gatnaşyjylara</h4>
                            <p class="content">
                                Sizi Berkarar döwletiň täze eýýamynyň Galkynyşy döwrüniň Arkadag Serdarly bagtyýar ýaşlar ýylynda «Halkara ulag-üstaşyr geçelgeleri: 
                                özara arabaglanyşyk we ösüş — 2023»
                            </p>
                            <span class="date">14.03.2023</span>
                        </div>
                    </a>

                </div>

                <div class="news_row_medium flex_row">

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_1.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmenistanyň ulag diplomatiýasy ugrunda hyzmatdaşlygynyň meseleleri ara alnyp maslahatlaşyldy</h4>
                            <p class="content">
                                2023-nji ýylyň 1-nji maýynda Türkmenistanyň daşary syýasat edarasynyň binasynda Türkmenistanyň Daşary işler 
                                ministriniň orunbasary B.Mätiýewiň, şu ýylyň 3-4-nji maýynda geçiriljek “Halkara ulag-üstaşyr geçelgeleri:
                            </p>
                            <span class="date">01.05.2023</span>
                        </div>
                    </a>

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_2.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmenistan – ABŞ: hyzmatdaşlygyň täze gözýetimleri</h4>
                            <p class="content">
                                Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Türkmenistanyň Mejlisiniň deputatlarynyň, 
                                halk maslahatlarynyň we Geňeşleriň agzalarynyň saýlawlaryna gatnaşdy.
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

                </div>
            </div>
        </div>
    </div>

    <div class="activities_section flex_row">
        <div class="inner_wrapper flex_column">
            <h2 class="title">MEJLISDE ALNYP BARYLÝAN IŞLER</h2>

            <div class="activities_row flex_row">

                <div class="activity_container flex_column container_box_shadow" data-href-value="#">
                    <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                        <mask id="path-2-inside-1_113_1071" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                        </mask>
                        <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                        <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                    </svg>
                    <h3 class="title">TÜRKMENISTANDA BELGIÝA PATYŞALYGYNYŇ ADATDAN DAŞARY WE DOLY YGTYÝARLY ILÇISI WEZIPÄ BELLENILDI</h3>
                    <p class="content">
                        Onuň Alyhezreti,<br>
                        Türkmenistanyň Prezidenti<br>
                        jenap Serdar BERDIMUHAMEDOWA<br>
                        Jenap Prezident!<br>
                        Döwletlerimiziň arasyndaky dostlukly gatnaşyklary pugtalandyrmak maksady bilen, biz jenap Mişel Pitermansy — Leopold II ordeniniň kawalerini Belgiýa Patyşalygynyň Türkmenistandaky Adatdan daşary we Doly ygtyýarly ilçisi wezipesine bellemek kararyna geldik. Jenap Pitermansyň ýokary şahsy häsiýetleri, wepadarlygy, ozalky eýelän wezipelerinde görkezen erjelligi we ukyp-başarnyklary öz üstüne ýüklenen wezipesini Siziň Alyhezretiňiziň makullamagyna mynasyp derejede ýerine ýetirjekdigine ynam döredýär.
                    </p>
                    <div class="bottom_row flex_row">
                        <span class="date">11.04.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="activity_container flex_column container_box_shadow" data-href-value="#">
                    <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                        <mask id="path-2-inside-1_113_1071" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                        </mask>
                        <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                        <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                    </svg>
                    <h3 class="title">Dünýägözel Gulmanowa Türkmenistanyň Mejlisiniň Başlygy wezipesine saýlanyldy</h3>
                    <p class="content">
                        Şu gün Jemgyýetçilik guramalarynyň merkezinde Prezident Serdar Berdimuhamedowyň gatnaşmagynda Türkmenistanyň Mejlisiniň 
                        ýedinji çagyrylyşynyň birinji maslahaty geçirildi. Bu barada «Watan» habarlar gepleşiginde habar berildi.
                    </p>
                    <div class="bottom_row flex_row">
                        <span class="date">06.04.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="activity_container flex_column container_box_shadow" data-href-value="#">
                    <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                        <mask id="path-2-inside-1_113_1071" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                        </mask>
                        <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                        <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                    </svg>
                    <h3 class="title">Gahryman Rozyýew Mejlisiň Başlygynyň orunbasary wezipesine saýlanyldy</h3>
                    <p class="content">
                        Habar berşimiz ýaly, şu gün Prezident Serdar Berdimuhamedowyň gatnaşmagynda Jemgyýetçilik guramalarynyň merkezinde 
                        Türkmenistanyň Mejlisiniň ýedinji çagyrylyşynyň birinji maslahaty geçirildi. Onda milli parlamentiň täze ýolbaşçy 
                        düzümi saýlanylyp, deputatlaryň öňünde durýan esasy wezipeler kesgitlenildi.
                    </p>
                    <div class="bottom_row flex_row">
                        <span class="date">06.04.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="activity_container flex_column container_box_shadow" data-href-value="#">
                    <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                        <mask id="path-2-inside-1_113_1071" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                        </mask>
                        <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                        <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                    </svg>
                    <h3 class="title">Türkmenistanyň Mejlisiniň ýedinji çagyrylyşynyň birinji maslahaty geçirildi</h3>
                    <p class="content">
                        6-njy aprelde hormatly Prezidentimiz SerdarBerdimuhamedowyň gatnaşmagyndaJemgyýetçilik guramalarynyň merkezinde 
                        Türkmenistanyň Mejlisiniň ýedinji çagyrylyşynyň birinji maslahaty bolup geçdi.
                        Milli parlamentiň täze çagyrylyşynyň maslahatynda Türkmenistanyň Konstitusiýasynyň 80-nji maddasyna laýyklykda we 
                        Türkmenistanyň Mejlisiniň ýedinji çagyrylyşynyň birinji maslahatynyň barşynda gizlin ses bermegiň netijeleri boýunça 
                        Dünýägözel Akmuhammedowna Gulmanowa Türkmenistanyň Mejlisiniň Başlyklygyna saýlayldy.
                    </p>
                    <div class="bottom_row flex_row">
                        <span class="date">06.04.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('components.deputies_section')

    <div class="legislation_section flex_row">
        <div class="inner_wrapper">
            <h2 class="title">Kanunçylyk</h2>
            <div class="content_row flex_row">

                <div class="legislation_container flex_column container_box_shadow" data-href-value="#">

                    <div class="upper_block flex_column">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>

                        <p class="content">
                            Ahal welaýatynyň täze, döwrebap edara ediş merkezinde gurlan bilim, saglygy goraýyş, medeniýet edaralaryna we 
                            sungat binasyna türkmen halkynyň görnükli şahsyýetleriniň atlaryny dakmak hakynda
                        </p>
                    </div>

                    <div class="bottom_row flex_row">
                        <span class="date">11.02.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="legislation_container flex_column container_box_shadow" data-href-value="#">

                    <div class="upper_block flex_column">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>

                        <p class="content">
                            Ahal welaýatynyň täze, döwrebap edara ediş merkezine şäher derejesini bermek we oňa at dakmak hakynda
                        </p>
                    </div>

                    <div class="bottom_row flex_row">
                        <span class="date">11.02.2023</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="legislation_container flex_column container_box_shadow" data-href-value="#">
                    <div class="upper_block flex_column">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>

                        <p class="content">
                            Türkmenistanyň Prezidentiniň saýlawlaryny bellemek hakynda
                        </p>
                    </div>
                        
                    <div class="bottom_row flex_row">
                        <span class="date">14.02.2022</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="legislation_container flex_column container_box_shadow" data-href-value="#">
                    <div class="upper_block flex_column">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>

                        <p class="content">
                            2022-nji ýyly «Halkyň Arkadagly zamanasy» diýip yglan etmek hakynda
                        </p>
                    </div>
                        
                    <div class="bottom_row flex_row">
                        <span class="date">27.12.2021</span>
                        <a href="#" class="flex_row hover_underline">
                            <span>Doly oka</span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="websites_section flex_row">
        
        <div class="inner_wrapper">
            <div class="title_row flex_row">
                <h2 class="title">Web Saýtlar</h2>

                <div class="buttons_block">
                    <svg class="arrow_left" id="scroll_left" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" transform="matrix(-1 0 0 1 22.5 2)" stroke="#28303F" stroke-width="1.5"/>
                        <path d="M11.5 15L8.5 12M8.5 12L11.5 9M8.5 12L16.5 12" stroke="#28303F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <svg class="arrow_right" id="scroll_right" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12" r="10" stroke="#0080C7" stroke-width="1.5"/>
                        <path d="M13.5 15L16.5 12M16.5 12L13.5 9M16.5 12L8.5 12" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <div class="content_block flex_row" id="websites_block">

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_2.svg') }}" alt="">
                    <h3 class="content">
                        «TÜRKMENARAGATNAŞYK» agentligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_3.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Daşary işler ministrligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_4.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Gyzyl Ýarymaý Milli jemgyýeti
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_5.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Saglygy goraýyş we derman senagaty ministrligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_2.svg') }}" alt="">
                    <h3 class="content">
                        «TÜRKMENARAGATNAŞYK» agentligi
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_4.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Gyzyl Ýarymaý Milli jemgyýeti
                    </h3>
                </a>

                <a href="#" class="website_container flex_column">
                    <img class="icon" src="{{ asset('icons/website_logo_1.svg') }}" alt="">
                    <h3 class="content">
                        Türkmenistanyň Zähmet we ilaty durmuş taýdan goramak ministrligi
                    </h3>
                </a>
            </div>
            

        </div>
    </div>

</div>

<script>
const window_height = window.innerHeight
let scroll_dir = 'down'



$(document).ready(() => {
    if($(window).scrollTop() > 5) {
        $('.upper_header').addClass('hidden')
    }
    $('.legislation_container').on('click', (event)=>{
        $(event.target).data('href-value') ? window.location.replace($(event.target).data('href-value')) : ''
    })

    $('.activity_container').on('click', (event)=>{
        $(event.target).data('href-value') ? window.location.replace($(event.target).data('href-value')) : ''
    })


    let websites_scroll_position = 0
    const website_container_width = document.querySelector('.website_container').offsetWidth + 24
    let scroll_point_remainder = 0  //Till the next scroll point (so the container stays in viewPort in full width)
    

    $('#scroll_left').on('click', (event) => {
        websites_scroll_position = $('#websites_block').scrollLeft()
        scroll_point_remainder = websites_scroll_position % website_container_width

        if(scroll_point_remainder == 0){
            $('#websites_block').animate({scrollLeft: websites_scroll_position - website_container_width})
        } else {
            $('#websites_block').animate({scrollLeft: websites_scroll_position - scroll_point_remainder})
        }
    })

    $('#scroll_right').on('click', (event) => {
        websites_scroll_position = $('#websites_block').scrollLeft()
        scroll_point_remainder = website_container_width - (websites_scroll_position % website_container_width)

        if(scroll_point_remainder == 0){
            $('#websites_block').animate({scrollLeft: websites_scroll_position + website_container_width})
        } else {
            $('#websites_block').animate({scrollLeft: websites_scroll_position + scroll_point_remainder})
        }
    })
})
$(window).on('scroll',(event)=> {

    if($(window).scrollTop() > 150){
        scroll_dir = 'up'
    }

    if($(window).scrollTop() > 5 && scroll_dir == 'down') {
        $('.upper_header').addClass('hidden')
    }  else if($(window).scrollTop() == 0 && scroll_dir == 'up'){
        $('.upper_header').removeClass('hidden')
        scroll_dir = 'down'
    }

});

</script>
@endsection
 