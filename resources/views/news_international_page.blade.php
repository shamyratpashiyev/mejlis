@extends('layout', ['title'=>__('app.news_international_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/news_international_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.international_cooperation_page.title'), 'url' => route('international_cooperation_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.friendship_group_page.title'),'url' => route('friendship_group_page',['lang' => app()->getLocale()])], 
                    ['name'=>__('app.news_international_page.title'), 'url' => route('news_international_page',['lang' => app()->getLocale()])],
    ];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.international'), 'url' => '#'],
                    ['name' => __('app.news_international_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="news_international_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.international') }}"/>

                <div class="right_side flex_column">

                    <a href="{{ route('single_news_international_page',1) }}" class="news_container flex_row">
                        <div class="text_block flex_column">
                            <h3 class="title">Türkmenistan — Gruziýa: parlamentara gatnaşyklar pugtalandyrylýar</h3>
                            <p class="content">Şu gün Türkmenistanyň Mejlisinde “Türkmenistan — Gruziýa” parlamentara dostluk toparynyň başlygy Dawid Matikaşwiliniň ýolbaşçylygynda ýurdumyza gelen Gruziýanyň parlament wekiliýeti bilen duşuşyk geçirildi.</p>
                            <span class="date">22.05.2023</span>
                        </div>

                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_inter_1.jpg') }}" alt="">
                        </div>
                    </a>

                    <a href="#" class="news_container flex_row">
                        <div class="text_block flex_column">
                            <h3 class="title">Türkmenistanyň wekiliýeti «KazanForum 2023» forumyň çärelerine gatnaşýar</h3>
                            <p class="content">
                                2023-nji ýylyň 18-nji maýynda Tatarstanyň paýtagtynda «KazanForum 2023» halkara ykdysady forumyň ilkinji çäreleri öz işine başlady. Bu barada ýurdumyzyň daşary syýasat edarasy habar berýär.
                                Forumyň çäklerinde “Demirgazyk-Günorta” halkara ulag geçelgesiniň ösdürilmegi barada” atly sessiýanyň dowamynda Türkmenistanyň Ministrler Kabinetiniň ýanyndaky Ulag we kommunikasiýalar agentliginiň Baş direktory M.Çakyýew çykyş etdi. Türkmen wekiliýetiniň ýolbaşçysynyň çykyşynda
                            </p>
                            <span class="date">19.05.2023</span>
                        </div>

                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_inter_2.jpg') }}" alt="">
                        </div>
                    </a>

                    <a href="#" class="news_container flex_row">
                        <div class="text_block flex_column">
                            <h3 class="title">Bedew bady bilen ösüşiň täze belentliklerine tarap</h3>
                            <p class="content">Geçen hepdede ýurdumyzda halkymyzyň jebisligini, häzirki nesliň pederlerimiziň ruhy gymmatlyklaryna ygrarlydygyny alamatlandyran Türkmen bedewiniň milli baýramy dabaraly ýagdaýda bellenildi. Halkymyzyň buýsanjy, milli baýlygy,</p>
                            <span class="date">14.03.2023</span>
                        </div>

                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_inter_3.jpg') }}" alt="">
                        </div>
                    </a>

                    <a href="#" class="news_container flex_row">
                        <div class="text_block flex_column">
                            <h3 class="title">Türkmenistanyň Prezidentiniň adyna gelen hat</h3>
                            <p class="content">Mähriban eneňiziň aradan çykmagy baradaky habary uly gynanç bilen kabul etdim</p>
                            <span class="date">14.03.2023</span>
                        </div>

                        <div class="image_wrapper">
                            <img src="{{ asset('img/news_inter_4.jpg') }}" alt="">
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
    
@endsection