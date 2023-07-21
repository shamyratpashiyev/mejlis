@extends('layout',['title' => __('app.convocation_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convocation_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Mejlisiň taryhy', 'url' => '#'],
                    ['name'=>'VII çagyrylyşynyň deputatlarynyň sanawy','url' => '#'], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.about_mejlis_page'), 'url' => '#'],
                    ['name' => __('app.convocation_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')

    <div class="convocation_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Mejlis hakynda" />

                <div class="right_side">
                    <h3 class="block_title">@lang('app.convocation_page.convocation_deputies_list')</h3>

                    <div class="search_block flex_column">

                        <div class="letters_row flex_row">
                            <span class="letter">A</span>
                            <span class="letter">B</span>
                            <span class="letter">Ç</span>
                            <span class="letter">D</span>
                            <span class="letter">E</span>
                            <span class="letter">Ä</span>
                            <span class="letter">F</span>
                            <span class="letter">G</span>
                            <span class="letter">H</span>
                            <span class="letter">I</span>
                            <span class="letter">J</span>
                            <span class="letter">Ž</span>
                            <span class="letter">K</span>
                            <span class="letter">L</span>
                            <span class="letter">M</span>
                            <span class="letter">N</span>
                            <span class="letter">Ň</span>
                            <span class="letter">O</span>
                            <span class="letter">Ö</span>
                            <span class="letter">P</span>
                            <span class="letter">R</span>
                            <span class="letter">S</span>
                            <span class="letter">Ş</span>
                            <span class="letter">T</span>
                            <span class="letter">U</span>
                            <span class="letter">Ü</span>
                            <span class="letter">W</span>
                            <span class="letter">Y</span>
                            <span class="letter">Ý</span>
                            <span class="letter">Z</span>
                        </div>

                        <div class="select_row">
                            <select name="" id="">
                                <option value="">Saýlaw okrugy</option>
                                <option value="">Saýlaw okrugy</option>
                            </select>
                        </div>
                    </div>

                    <div class="deputies_list_block flex_row">
                        <div class="left_column flex_column">
                            <span class="deputy_name">Babaýew Kasymguly Gulmyradowiç</span>
                            <span class="deputy_name">Muhamedow Begmurat Rahmangulyýewiç</span>
                            <span class="deputy_name">Öwekowa Jenet Ýazberdiýewna</span>
                            <span class="deputy_name">Owganow Saparmyrat Esenowiç</span>
                            <span class="deputy_name">Kanjanow Atamurat Otuzbaýewiç</span>
                            <span class="deputy_name">Kanjanow Atamurat Otuzbaýewiç</span>
                            <span class="deputy_name">Toýlyýew Aşyr Hudaýnazarowiç</span>
                            <span class="deputy_name">Tuwakow Merdan Baýramdurdyýewiç</span>
                            <span class="deputy_name">Musaýew Atageldi Amangeldiýewiç</span>
                            <span class="deputy_name">Seýilow Baýly Toýlyýewiç</span>
                            <span class="deputy_name">Durdyýew Gurbangylyç Arazowiç</span>
                            <span class="deputy_name">Kutlyýewa Aýgözel Akmuradowna</span>
                            <span class="deputy_name">Toýlyýewa Aýnabat Gaýypowna</span>
                            <span class="deputy_name">Kurambaýewa Mähriban Satywaldyýewna</span>
                        </div>
                        <div class="right_column flex_column">
                            <span class="deputy_name">Gurbandurdyýew Şatlyk Meretdurdyýewiç</span>
                            <span class="deputy_name">Şäherow Jumamyrat Paltabaýewiç</span>
                            <span class="deputy_name">Jumaýewa Maýsa Ýegenmyradowna</span>
                            <span class="deputy_name">Babaýew Baýmyrat Atanaýewiç</span>
                            <span class="deputy_name">Amanýazowa Enejan Saparmuhammedowna</span>
                            <span class="deputy_name">Nepesow Kakamämmet Hemraýewiç</span>
                            <span class="deputy_name">Haýytjanow Ýeňiş Sultanmuradowiç</span>
                            <span class="deputy_name">Durdymedowa Ogulşad Sapardurdyýewna</span>
                            <span class="deputy_name">Maşalaýew Amanmyrat Şyhyýewiç</span>
                            <span class="deputy_name">Meredow Nurgeldi Babageldiýewiç</span>
                            <span class="deputy_name">Artykow Döwran Arazowiç</span>
                            <span class="deputy_name">Sadullaýew Rasul Kamilowiç </span>
                            <span class="deputy_name">Gaýypow Serdar Aşyrowiç</span>
                            <span class="deputy_name">Hangeldiýew Arazmyrat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection