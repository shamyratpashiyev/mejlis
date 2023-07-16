@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/history_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="tkm_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Türkmenistanyň döwlet nyşanlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">Taryhy</h3>

                    <p>
                        &emsp;&emsp;Türkmenistan 1991-nji ýylyň 27-nji oktýabrynda Garaşsyz döwlet boldy we şondan bäri bu sene ýurtda Garaşsyzlyk güni hökmünde bellenilýär. 1995-nji ýylyň 12-nji dekabrynda 185 döwletiň biragyzdan goldamagy bilen, Birleşen Milletler Guramasynyň Baş Assambleýasynyň Rezolýusiýasy bilen hemişelik Bitarap döwlet diýlip ykrar edildi. Häzirki wagtda Türkmenistan 142 döwlet bilen diplomatik gatnaşyklary ýola goýdy.
                    </p>
                </div>

                <div class="right_column flex_column">
                    <a href="#">Prezidenti</a>
                    <a href="{{ route('tkm_history_page') }}" class="active">Taryhy</a>
                    <a href="{{ route('tkm_area_page') }}">Meýdany</a>
                    <a href="{{ route('tkm_population_page') }}">Ilaty</a>
                    <a href="{{ route('tkm_state_symbols_page') }}">Döwlet nyşanlary</a>
                    <a href="#">Konstitusiýasy</a>
                    <a href="{{ route('tkm_state_holidays_page') }}">Döwlet baýramçylyklary we matam günleri</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection