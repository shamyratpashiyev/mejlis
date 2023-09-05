@extends('layout',['title' => __('app.tkm.history_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turkmenistan/tkm_pages.css') }}">
@endpush

@php
    $links_list = [];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.tkm.history_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
     $sidebar_right = [
                    (object)['id' => '1','routeName'=>'tkm_general_information_page','name_tm' => __('app.tkm.general_information'),'name_ru' => __('app.tkm.general_information'),'name_en' => __('app.tkm.general_information')],
    ];
    $sidebar_right = (object) $sidebar_right;
    
@endphp

@section('content')
    <div class="tkm_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="--"/>

                <div class="middle_column flex_column">
                    <h3 class="column_title"></h3>
                    
                    <div class="text_wrapper">
                        
                    </div>
                </div>

                <x-sidebar-right title="" :items-list="$sidebar_right" 
                    current-item-id="1" :routeName="0" classes="turkmenistan_pages"/>
            </div>
        </div>
    </div>
    
@endsection