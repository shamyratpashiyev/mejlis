@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

@section('content')
<div class="news_section_main flex_row">
    <div class="inner_wrapper flex_column">
        <div class="title_row flex_row">
            <h2>Habarlar</h2>
            <a href="#" class="flex_row">
                <span>Hemmesi</span>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="grid_block">

            <div class="news_container_big flex_column">
                <div class="image_wrapper">
                    <img src="{{ asset('img/news_big.jpg') }}" alt="">
                </div>
                <h3 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Türkiýe Respublikasynyň Prezidentine hat iberdi</h3>
                <p  class="content">
                    Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow Türkiýe Respublikasynyň Prezidenti 
                    Rejep Taýyp Ärdogana iberen hatynda Türkmenistana we onuň halkyna hakyky dostluk gatnaşygy üçin hormatyny we minnetdarlygyny beýan
                </p>
                <span class="date">14.03.2023</span>
            </div>

            <div class="news_block_scroll flex_column">

                <div class="news_container_small flex_row">
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
                </div>

                <div class="news_container_small flex_row">
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
                </div>

                <div class="news_container_small flex_row">
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
                </div>

                <div class="news_container_small flex_row">
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
                </div>

            </div>

            <div class="news_row_medium flex_row">

                <div class="news_container_medium flex_column">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_1.jpg') }}" alt="">
                    </div>
                    <h4 class="title">Türkmenistanyň ulag diplomatiýasy ugrunda hyzmatdaşlygynyň meseleleri ara alnyp maslahatlaşyldy</h4>
                    <p class="content">
                        2023-nji ýylyň 1-nji maýynda Türkmenistanyň daşary syýasat edarasynyň binasynda Türkmenistanyň Daşary işler 
                        ministriniň orunbasary B.Mätiýewiň, şu ýylyň 3-4-nji maýynda geçiriljek “Halkara ulag-üstaşyr geçelgeleri:
                    </p>
                    <span class="date">01.05.2023</span>
                </div>

                <div class="news_container_medium flex_column">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_2.jpg') }}" alt="">
                    </div>
                    <h4 class="title">Türkmenistan – ABŞ: hyzmatdaşlygyň täze gözýetimleri</h4>
                    <p class="content">
                        Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Türkmenistanyň Mejlisiniň deputatlarynyň, 
                        halk maslahatlarynyň we Geňeşleriň agzalarynyň saýlawlaryna gatnaşdy.
                    </p>
                    <span class="date">01.05.2023</span>
                </div>

                <div class="news_container_medium flex_column">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_3.jpg') }}" alt="">
                    </div>
                    <h4 class="title">Türkmenistanyň Prezidenti sanly ulgam arkaly iş maslahatyny geçirdi</h4>
                    <p class="content">
                        Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow Ministrler Kabinetiniň Başlygynyň 
                        obasenagat toplumyna gözegçilik edýän orunbasary A.Ýazmyradowyň, ýurdumyzyň welaýatlarynyň 
                        häkimleriniň we Ministrler Kabinetiniň Başlygynyň orunbasary,
                    </p>
                    <span class="date">01.05.2023</span>
                </div>

                <div class="news_container_medium flex_column">
                    <div class="image_wrapper">
                        <img src="{{ asset('img/news_medium_4.jpg') }}" alt="">
                    </div>
                    <h4 class="title">Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Özbegistan Respublikasynyň Prezidentini gutlady</h4>
                    <p class="content">
                        Türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedow Özbegistan Respublikasynyň Prezidenti 
                        Şawkat Mirziýoýewe Özbegistanyň Konstitusiýasyna üýtgetmeleri we goşmaçalary girizmek boýunça sala salşygyň üstünlikli geçirilmegi 
                        mynasybetli tüýs ýürekden çykýan gutlaglaryny beýan etdi.
                    </p>
                    <span class="date">01.05.2023</span>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
 