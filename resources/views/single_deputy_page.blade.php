@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_deputy_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Mejlis komitetleri ', 'url' => '#'],
                    ['name'=>'Mejlis deputatlary ','url' => '#'], 
                ]
@endphp

@section('content')
    <div class="single_deputy_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Düzümi we gurluşygy / Mejlis deputatlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Düzümi we gurluşygy"/>

                <div class="right_block flex_column">

                    <h3 class="name">Babaýew Kasymguly Gulmyradowiç</h3>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Wezipesi:</span>
                        <span class="value">Türkmenistanyň Halk Maslahatynyň Diwanynyň Iş dolandyryjysy</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Doglan ýyly:</span>
                        <span class="value">1966 ýyl</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">E-mail adresi:</span>
                        <a href="mailto:info@mejlis.gov.tm" class="value link">info@mejlis.gov.tm</a>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Saýlaw okrugy:</span>
                        <span class="value link">1-nji «Garaşsyzlyk» saýlaw okrugy</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Terjimehaly:</span>
                        <span class="value link">giňişleýin</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Komiteti:</span>
                        <span class="value">Adam hukuklaryny we azatlyklaryny goramakbaradaky komiteti</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection