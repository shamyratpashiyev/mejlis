@extends('layout',['title' => __('app.tkm.state_symbols_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/state_symbols_page.css') }}">
@endpush

@php
    $links_list = [];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.tkm.state_symbols_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];

    $sidebar_right = [
                    (object)['id' => '1','routeName'=>'tkm_history_page','name_tm' => __('app.tkm.history'),'name_ru' => __('app.tkm.history'),'name_en' => __('app.tkm.history')],
                    (object)['id' => '2','routeName'=>'tkm_area_page','name_tm' => __('app.tkm.area'),'name_ru' => __('app.tkm.area'),'name_en' => __('app.tkm.area')],
                    (object)['id' => '3','routeName'=>'tkm_population_page','name_tm' => __('app.tkm.population'),'name_ru' => __('app.tkm.population'),'name_en' => __('app.tkm.population')],
                    (object)['id' => '4','routeName'=>'tkm_state_symbols_page','name_tm' => __('app.tkm.state_symbols'),'name_ru' => __('app.tkm.state_symbols'),'name_en' => __('app.tkm.state_symbols')],
                    (object)['id' => '5','routeName'=>'tkm_constitution_page','name_tm' => __('app.tkm.constitution'),'name_ru' => __('app.tkm.constitution'),'name_en' => __('app.tkm.constitution')],
                    (object)['id' => '6','routeName'=>'tkm_state_holidays_page','name_tm' => __('app.tkm.state_holidays'),'name_ru' => __('app.tkm.state_holidays'),'name_en' => __('app.tkm.state_holidays')],
    ];
    $sidebar_right = (object) $sidebar_right;
@endphp

@section('content')
    <div class="tkm_state_symbols_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">

                    <div class="symbol_container">

                        <h3 class="block_title">{{ $symbols->{'flag_title_' . app()->getLocale()} }}</h3>

                        <div class="image_wrapper flex_row">
                            <img src="{{ asset($symbols->flag_img) }}" alt="">
                        </div>
                        {!! $symbols->{'flag_text_' . app()->getLocale()} !!}
                    </div>

                    <hr>

                    <div class="symbol_container">

                        <h3 class="block_title">{{ $symbols->{'emblem_title_' . app()->getLocale()} }}</h3>

                        <div class="image_wrapper flex_row">
                            <img src="{{ asset($symbols->emblem_img) }}" alt="">
                        </div>
                        {!! $symbols->{'emblem_text_' . app()->getLocale()} !!}
                    </div>

                    <hr>

                    <div class="symbol_container">

                        <h3 class="block_title">{{ $symbols->{'anthem_description_title_' . app()->getLocale()} }}</h3>
                        
                        {!! $symbols->{'anthem_description_text_' . app()->getLocale()} !!}
                    </div>

                    <hr>

                    <div class="symbol_container anthem_container">

                        <h3 class="block_title">{{ $symbols->{'anthem_title_' . app()->getLocale()} }}</h3>
                        
                        {!! $symbols->{'anthem_text_' . app()->getLocale()} !!}

                    </div>


                </div>

                <x-sidebar-right title="" :items-list="$sidebar_right" 
                    current-item-id="4" :routeName="0" classes="turkmenistan_pages"/>
            </div>
        </div>
    </div>
    
@endsection