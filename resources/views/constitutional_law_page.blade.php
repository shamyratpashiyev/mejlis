@extends('layout',['title' => __('app.constitutional_law_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/constitutional_law_page.css') }}">
@endpush

@php
    $links_list = [
                    // ['name'=>'Законопроекты на обсуждение', 'url' => '#'],
                    ['name' => __('app.codes_page.title'),'url' => route('codes_page',['lang' => app()->getLocale()])], 
                    ['name' => __('app.laws_page.title'), 'url' => route('laws_page',['lang' => app()->getLocale()])],
                    ['name' => __('app.mejlis_decrees_page.title'), 'url' => route('mejlis_decrees_page',['lang' => app()->getLocale()])],
                    ['name' => __('app.constitutional_law_page.title'), 'url' => route('mejlis_decrees_page',['lang' => app()->getLocale()])],
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.legislation_page'), 'url' => '#'],
                    ['name' => __('app.constitutional_law_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="constitutional_law_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure_page') }}"/>

                <div class="right_side flex_column">
                    <h3 class="block_title">@lang('app.constitutional_law_page.title')</h3>

                    <div class="text_block">

                        <div class="title_block flex_column">
                            <h4 class="text_title">@lang('app.constitutional_law_page.text_title')</h4>
                            <h5 class="text_subtitle">@lang('app.constitutional_law_page.text_subtitle')</h5>
                            <span>@lang('app.constitutional_law_page.reference_title')</span>
                        </div>
                        
                       @lang('app.constitutional_law_page.text')
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection