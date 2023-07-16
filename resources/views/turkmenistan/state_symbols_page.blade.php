@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/state_symbols_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    
@endphp

@section('content')
    <div class="tkm_state_symbols_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Türkmenistanyň döwlet nyşanlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">Türkmenistanyň dowlet baýdagy</h3>

                    <div class="image_wrapper flex_row">
                        <img src="{{ asset('img/flag.jpg') }}" alt="">
                    </div>
                    <p>
                        &emsp;&emsp;Türkmenistanyň Döwlet baýdagy milletiň agzybirliginiň we Garaşsyzlygynyň hem-de döwlet Bitaraplygynyň nyşanydyr.
                    </p>
                    <p>
                        &emsp;&emsp;2008-nji ýylyň 29-njy iýunynda Aşgabat şäherinde Ginnesiň Bütindünýä rekordlar kitabyna girizilen dünýäde iň belent 133 metrlik flagştokda uzynlygy 52,5 we ini 35 metre, agramy bolsa 420 kilograma barabar ägirt uly Döwlet baýdagy dikeldildi.
                    </p>
                </div>

                <div class="right_column flex_column">
                    <a href="#">Prezidenti</a>
                    <a href="{{ route('tkm_history_page') }}">Taryhy</a>
                    <a href="{{ route('tkm_area_page') }}">Meýdany</a>
                    <a href="{{ route('tkm_population_page') }}">Ilaty</a>
                    <a href="{{ route('tkm_state_symbols_page') }}" class="active">Döwlet nyşanlary</a>
                    <a href="#">Konstitusiýasy</a>
                    <a href="#">Döwlet baýramçylyklary we matam günleri</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection