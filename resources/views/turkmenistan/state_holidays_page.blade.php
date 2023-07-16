@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/state_holidays_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="tkm_state_holidays_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Türkmenistanyň döwlet nyşanlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">Döwlet baýramçylyklary we matam günleri</h3>

                    <p>
                        &emsp;&emsp; <strong>Döwletiň esasy döwlet we milli baýramçylyklary : </strong><br><br>
                        &emsp;&emsp;Täze ýyl — 1-nji ýanwar; <br>
                        &emsp;&emsp;Döwlet Baýdagynyň güni — 19-njy fewral; <br>
                        &emsp;&emsp;Halkara zenanlar güni — 8-nji mart; <br>
                        &emsp;&emsp;Milli bahar baýramy (Nowruz) — 21-22-nji mart; <br>
                        &emsp;&emsp;Ýeňiş güni — 9-njy maý; <br>
                        &emsp;&emsp;Konstitusiýa güni we Galkynyş, Agzybirlik we Magtymguly Pyragynyň şygryýet güni — 18-nji maý; <br>
                        &emsp;&emsp;Türkmenistanyň Garaşsyzlyk güni — 27-28-nji oktýabr; <br>
                        &emsp;&emsp;Türkmenistanyň milli baýramy — Bitaraplyk güni — 12-nji dekabr. <br>
                    </p>
                    <br>
                    <p style="color: var(--sky_blue); text-align:justify; font-weight: bold;">
                        &emsp;&emsp; 
                        Her ýyl bellenilip geçilýän Gurban baýramynyň we Oraza baýramynyň seneleri Türkmenistanyň Prezidentiniň namalaryna laýyklykda kesgitlenilýär.
                    </p>
                    <br>
                    <p>
                        &emsp;&emsp; <strong> Matam günleri:</strong><br>
                        &emsp;&emsp; Milli ýatlama güni — 6-njy oktýabr.
                    </p>
                </div>

                <div class="right_column flex_column">
                    <a href="#">Prezidenti</a>
                    <a href="{{ route('tkm_history_page') }}">Taryhy</a>
                    <a href="{{ route('tkm_area_page') }}">Meýdany</a>
                    <a href="{{ route('tkm_population_page') }}">Ilaty</a>
                    <a href="{{ route('tkm_state_symbols_page') }}">Döwlet nyşanlary</a>
                    <a href="">Konstitusiýasy</a>
                    <a href="{{ route('tkm_state_holidays_page') }}" class="active">Döwlet baýramçylyklary we matam günleri</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection