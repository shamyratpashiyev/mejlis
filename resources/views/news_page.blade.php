@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_page.css') }}">
@endpush

@section('content')
<div class="news_page">

    <div class="news_section_main flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Halkara / Täzelikler
            </div>

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

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_6.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygynyň Türkiýe Respublikasynyň Prezidenti bilen telefon arkaly söhbetdeşligi</h4>
                            <p class="content">
                                Şu gün türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň we 
                                Türkiýe Respublikasynyň Prezidenti Rejep Taýyp Ärdoganyň arasynda geçirilen telefon arkaly söhbetdeşligiň barşynda
                            </p>
                            <span class="date">15.04.2023</span>
                        </div>
                    </a>

                    <a href="#" class="news_container_medium flex_column container_box_shadow">
                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_medium_7.jpg') }}" alt="">
                        </div>
                        <div class="content_wrapper flex_column">
                            <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygynyň we Eýran Yslam Respublikasynyň Prezidentiniň telefon arkaly söhbetdeşligi</h4>
                            <p class="content">
                                Şu gün türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň Eýran Yslam Respublikasynyň 
                                Prezidenti Seýed Ebrahim Raisi bilen telefon arkaly söhbetdeşligi boldy. Onuň
                            </p>
                            <span class="date">15.04.2023</span>
                        </div>
                    </a>

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

            <div class="pagination_row flex_row">
                            
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <a href="#">
                        <path d="M8.3 12.8602L14.3 18.8602C14.5 19.0602 14.7 19.1602 15 19.1602C15.3 19.1602 15.5 19.0602 15.7 18.8602C16.1 18.4602 16.1 17.8602 15.7 17.4602L10.4 12.1602L15.7 6.86016C16.1 6.46016 16.1 5.86016 15.7 5.46016C15.3 5.06016 14.7 5.06016 14.3 5.46016L8.3 11.4602C7.9 11.8602 7.9 12.4602 8.3 12.8602Z" fill="black"/>
                    </a>
                </svg>

                <a href="#" class="item">1</a>
                <a href="#" class="item">2</a>
                <a href="#" class="item">3</a>
                <span class="item">...</span>
                <a href="#" class="item">10</a>
                <a href="#" class="item">11</a>

                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <a href="#">
                        <path d="M15.7 12.8602L9.7 18.8602C9.5 19.0602 9.3 19.1602 9 19.1602C8.7 19.1602 8.5 19.0602 8.3 18.8602C7.9 18.4602 7.9 17.8602 8.3 17.4602L13.6 12.1602L8.3 6.86016C7.9 6.46016 7.9 5.86016 8.3 5.46016C8.7 5.06016 9.3 5.06016 9.7 5.46016L15.7 11.4602C16.1 11.8602 16.1 12.4602 15.7 12.8602Z" fill="black"/>
                    </a>
                </svg>
            </div>
        </div>
    </div>

</div>

@endsection