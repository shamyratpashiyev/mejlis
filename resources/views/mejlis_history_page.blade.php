@extends('layout',['title' => __('app.mejlis_history_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_history_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_history_page.title'), 'url' => route('mejlis_history_page',['lang' => app()->getLocale()])],
                    ['name'=> __('app.layout.seventh_convocation_page'), 'url' => route('convocation_page',['lang' => app()->getLocale()])], 
    ];
    
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.about_mejlis'), 'url' => '#'],
                    ['name' => __('app.mejlis_history_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')
    <div class="mejlis_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.about_mejlis') }}"/>

                <div class="right_side">
                    <h3 class="block_title">@lang('app.mejlis_history_page.title')</h3>

                    <div class="text_block">
                        <h4 class="text_title">@lang('app.mejlis_history_page.text_title')</h4>
                        @lang('app.mejlis_history_page.text')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection