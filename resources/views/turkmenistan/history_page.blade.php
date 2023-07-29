@extends('layout',['title' => __('app.tkm.history_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/history_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'--', 'url' => '#'],
    ];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.tkm.history_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="tkm_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title">@lang('app.tkm.history_page.text_title')</h3>

                    @lang('app.tkm.history_page.text')
                </div>

                <div class="right_column flex_column">
                    {{-- <a href="#">@lang('app.tkm.president')</a> --}}
                    <a href="{{ route('tkm_history_page',['lang'=>app()->getLocale()]) }}" class="active">@lang('app.tkm.history')</a>
                    <a href="{{ route('tkm_area_page',['lang'=>app()->getLocale()]) }}">@lang('app.tkm.area')</a>
                    <a href="{{ route('tkm_population_page',['lang'=>app()->getLocale()]) }}">@lang('app.tkm.population')</a>
                    <a href="{{ route('tkm_state_symbols_page',['lang'=>app()->getLocale()]) }}">@lang('app.tkm.state_symbols')</a>
                    {{-- <a href="#">@lang('app.tkm.constitution',['lang'=>app()->getLocale()])</a> --}}
                    <a href="{{ route('tkm_state_holidays_page',['lang'=>app()->getLocale()]) }}">@lang('app.tkm.state_holidays')</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection