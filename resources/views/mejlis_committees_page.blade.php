@extends('layout',['title' => __('app.mejlis_committees_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_committees_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_committees_page.title'), 'url' => route('mejlis_committees_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.mejlis_deputies_page.title'),'url' => route('mejlis_deputies_page',['lang' => app()->getLocale()])], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.mejlis_structure_page'), 'url' => '#'],
                    ['name' => __('app.mejlis_committees_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')
    <div class="mejlis_committees_page flex_row">
        <div class="inner_wrapper flex_column">
            
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure_page') }}"/>

                <div class="middle_column">
                    <h3 class="block_title">Adam hukuklaryny we azatlyklaryny goramak baradaky komiteti</h3>

                    <div class="committee_members_block flex_row">

                        <div class="committee_member_container flex_column">
                            <span class="name">Orazmeredow Merdan Artykowiç</span>
                            <p class="description">
                                Türkmenistanyň Döwlet energetika institutynyň sanly elektronika we elektrotehnika kafedrasynyň mugallymy
                            </p>
                        </div>
                        
                        <div class="committee_member_container flex_column">
                            <span class="name">Seýilow Baýly Toýlyýewiç</span>
                            <p class="description">
                                Türkmenistanyň Mejlisiniň Adam hukuklaryny we azatlyklaryny goramak baradaky komitetiniň agzasy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Mämiýewa Şemşat Gylyçdurdyýewna</span>
                            <p class="description">
                                Gumdag şäherçe hassahanasynyň baş lukmanynyň ilkinji medisina-sanitar işleri boýunça orunbasary
                            </p>
                        </div>
                        
                        <div class="committee_member_container flex_column">
                            <span class="name">Mustakowa Hatyja Muratowna</span>
                            <p class="description">
                                Lebap welaýatynyň Türkmenabat şäheriniň 39-njy «Ülker» çagalar bagynyň müdiri
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Hojaýewa Ogulmaral Gurbansähedowna</span>
                            <p class="description">
                                Ahal welaýatynyň Bäherden etrabynyň 2-nji orta mekdebiniň müdiri
                            </p>
                        </div>
                        
                        <div class="committee_member_container flex_column">
                            <span class="name">Jumadurdyýew Atajan Isaýewiç</span>
                            <p class="description">
                                Lebap welaýat maliýe ykdysady orta hünär okuw mekdebiniň mugallymy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Gurbanmyradow Çary Annamyradowiç</span>
                            <p class="description">
                                Mary etrap hassahanasynyň 2-nji çagalar bölüminiň bölüm müdiri
                            </p>
                        </div>
                        
                        <div class="committee_member_container flex_column">
                            <span class="name">Gylyçmyradowa Jeren Aşyrgeldiýewna</span>
                            <p class="description">
                                Daşoguz welaýat inçekesel hassahanasynyň çagalar bölüminiň müdiri
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Bäşimow Artyk Çaryýewiç</span>
                            <p class="description">
                                Mary etrap häkimliginiň Senagat, gurluşyk we beýleki pudaklary bölüminiň arhitektory
                            </p>
                        </div>
                        
                        <div class="committee_member_container flex_column">
                            <span class="name">Diwanowa Meňli Abalakowna</span>
                            <p class="description">
                                Türkmenistanyň Mejlisiniň Adam hukuklaryny we azatlyklaryny goramak baradaky komitetiniň agzasy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Babaýew Kasymguly Gulmyradowiç</span>
                            <p class="description">
                                Türkmenistanyň Halk Maslahatynyň Diwanynyň Iş dolandyryjysy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Baýrammyradow Begençgeldi Merdanowiç</span>
                            <p class="description">
                                Türkmenistanyň Prezidentiniň ýanyndaky Döwlet gullugy akademiýasynyň talyby
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Amanýazowa Enejan Saparmuhamedowna</span>
                            <p class="description">
                                Daşoguz welaýatynyň Daşoguz şäheriniň 39-njy çagalar bakja bagynyň müdiri
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Babanyýazow Çarygeldi Gurbangeldiýewiç</span>
                            <p class="description">
                                Türkmenistanyň Mejlisiniň Daşky gurşawy goramak, tebigatdan peýdalanmak we agrosenagat toplumy baradaky komitetiniň başlygy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Akyýewa Çemen Jumamyrat Gyzy</span>
                            <p class="description">
                                Türkmenistanyň Mejlisiniň Adam hukuklaryny we azatlyklaryny goramak baradaky komitetiniň agzasy
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Allakulyýew Erkin Çaryýewiç</span>
                            <p class="description">
                                «Lebap» sement zawodynyň Enjamlary bejeriş-ulanyş sehiniň mehaniki ussahanasynyň inžener-konstruktory
                            </p>
                        </div>

                        <div class="committee_member_container flex_column">
                            <span class="name">Eşşäýew Ýusupguly Aşyrgulyýewiç</span>
                            <p class="description">
                                Türkmenistanyň Mejlisiniň Adam hukuklaryny we azatlyklaryny goramak baradaky komitetiniň başlygy
                            </p>
                        </div>

                        
                    </div>
                </div>

                <div class="right_column flex_column">
                    <h3 class="block_title">@lang('app.mejlis_committees_page.mejlis_committees')</h3>

                    <div class="buttons_block flex_column">
                        <span class="committee_name active">Adam hukuklaryny we azatlyklaryny goramak baradaky komiteti</span>
                        <span class="committee_name">Kada-kanunçylyk baradaky komiteti</span>
                        <span class="committee_name">Ykdysady meseleler baradaky komiteti</span>
                        <span class="committee_name">Durmuş syýasaty baradaky komiteti</span>
                        <span class="committee_name">Ylym, bilim, medeniýet we ýaşlar syýasaty baradaky komiteti</span>
                        <span class="committee_name">Daşky gurşawy goramak, tebigatdan peýdalanmak we agrosenagat toplumy baradaky komiteti</span>
                        <span class="committee_name">Halkara we parlamentara ragatnaşyklar baradaky komiteti</span>
                        <span class="committee_name">Ýerli wekilçilikli häkimiýet we öz-özüňi dolandyryş edaralary bilen işlemek baradaky komiteti</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection