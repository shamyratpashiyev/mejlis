@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_item_international_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Halkara hyzmatdaşlyk', 'url' => '#'],
                    ['name'=>'Dostluk topar','url' => '#'], 
                    ['name'=>'Täzelikler', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="single_item_international_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Halkara / Täzelikler
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Halkara"/>

                <div class="item_content_block flex_column">
                    
                    <div class="images_wrapper flex_row">
                        <img src="{{ asset('img/inter_item_single_1.jpg') }}" alt="" class="image_big">

                        <div class="small_images_wrapper flex_column">
                            <img src="{{ asset('img/inter_item_single_2.jpg') }}" alt="" class="image_small">
                            <img src="{{ asset('img/inter_item_single_3.jpg') }}" alt="" class="image_small">
                        </div>
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
                        <span class="date">26.05.2023</span>
                    </div>

                    <h2 class="news_title">Türkmenistanyň DIM-nde UNAMA-nyň missiýasynyň ýolbaşçysy bilen duşuşyk geçirildi</h2>

                    <div class="news_content">
                        <p>
                            &emsp;&emsp;2023-nji ýylyň 25-nji maýynda Türkmenistanyň daşary işler ministriniň wezipe borçlaryny wagtlaýyn ýerine ýetiriji W.Hajiýew “Merkezi Aziýa – Ýewropa Bileleşigi” formatynda Owganystan boýunça ýörite wekilleriň duşuşygyna gatnaşmak üçin Aşgabada iş sapary bilen gelen BMG-niň Owganystana ýardam bermek boýunça missiýasynyň (UNAMA) başlygy Roza Otunbaýewa bilen gepleşikleri geçirdi. Bu barada ýurdumyzyň daşary syýasat edarasy habar berýär. <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Duşuşygyň dowamynda taraplar sebit howpsuzlygynyň ileri tutulýan ugurlaryny ara alyp maslahatlaşdylar. W.Hajiýewiň bellemegine laýyklykda, Türkmenistan goňşy ýurduň howpsuzlygyna we durnuklylygyna, şeýle hem onuň durmuş-ykdysady taýdan ösmegine uly gyzyklanma bildirýär. Şu nukdaý nazardan, Owganystan meselelesi boýunça ýurtlaryň we BMG-niň arasynda giň özara hyzmatdaşlygyň amala aşyrylmalydygyna, ilki bilen, UNAMA bilen ýakyn gatnaşyklaryň saklanylmalydygyna üns çekildi.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Nygtalmagyna görä, Türkmenistan özüniň hemişelik bitaraplyk derejesine ygrarly bolmak bilen, Owganystandaky syýasy hem-de durmuş-ykdysady ýagdaýy durnuklylaşdyrmak boýunça halkara bileleşiginiň tagallalaryna goşant goşmak nukdaý nazaryndan netijeli işleri alyp barýan Merkezi Aziýa ýurtlarynyň biridir.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Türkmenistan yzygider ýagdaýda Owganystana ynsanperwer ýüklerini ugradýar, durmuş ähmiýetli desgalary gurýar, ilata lukmançylyk kömegini berýär. Şeýle hem bellenilişi ýaly, Türkmenistan TOPH gaz geçirijisini we TOP elektrlik geçirijisini gurmak, demir ýollary abatlamak, täze ýollary gurmak we ş.m. taslamalary amala aşyrmak arkaly goňşy ýurdy ykdysady taýdan dikeltmek üçin ýardam berýär.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Taraplar Owganystanyň dikeldilmegi we bu ýurduň dünýä hojalyk ulgamlaryna goşulyşmagy bilen bagly bilelikdäki taslamalary amala aşyrmak nukdaý nazaryndan mundan beýläk hem giň halkara hyzmatdaşlyk etmäge gyzyklanma bildirdiler.<br><br>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection