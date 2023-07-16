@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/area_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="tkm_area_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Türkmenistanyň döwlet nyşanlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">Meýdany</h3>

                    <p>
                        &emsp;&emsp;Türkmenistan– Merkezi Aziýanyň bäş ýurdunyň biri bolup, onuň meýdany boýunça olaryň arasynda ikinji orny eýeleýär, ýagny Türkmenistanyň tutýan meýdany 491,21 müň km2 deňdir.
                    </p>
                    <p>
                        &emsp;&emsp;Onuň günbatardan gündogara 1100 km. we demirgazykdan günorta 650 km. uzaýar.
                    </p>
                    <p>
                        &emsp;&emsp;Türkmenistan demirgazykda Gazagystan Respublikasy, demirgazyk–gündogarda we gündogarda Özbegistan Respublikasy bilen, günorta-gündogarda Owganystan Yslam Respublikasy bilen, günortada Eýran Yslam Respublikasy bilen serhetleşýär. Şeýle hem günbatarda Hazar deňzi tebigy serhedi bolmak bilen Azerbaýjan Respublikasy bilen hem serhetleşýär.
                    </p>
                </div>

                <div class="right_column flex_column">
                    <a href="#">Prezidenti</a>
                    <a href="{{ route('tkm_history_page') }}">Taryhy</a>
                    <a href="{{ route('tkm_area_page') }}" class="active">Meýdany</a>
                    <a href="#">Ilaty</a>
                    <a href="#">Döwlet nyşanlary</a>
                    <a href="#">Konstitusiýasy</a>
                    <a href="#">Döwlet baýramçylyklary we matam günleri</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection