@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/population_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="tkm_population_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Türkmenistanyň döwlet nyşanlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">Ilaty</h3>

                    <p>
                        &emsp;&emsp;Türkmenistanyň ilaty 6,2 mln. adamdan gowrakdyr. Türkmenistan — köp milletli döwletdir. Ýurtda 100-den gowrak milletleriň we halkyýetleriň wekilleri ýaşaýarlar.
                    </p>
                </div>

                <div class="right_column flex_column">
                    <a href="#">Prezidenti</a>
                    <a href="{{ route('tkm_history_page') }}">Taryhy</a>
                    <a href="{{ route('tkm_area_page') }}">Meýdany</a>
                    <a href="{{ route('tkm_population_page') }}" class="active">Ilaty</a>
                    <a href="#">Döwlet nyşanlary</a>
                    <a href="#">Konstitusiýasy</a>
                    <a href="#">Döwlet baýramçylyklary we matam günleri</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection