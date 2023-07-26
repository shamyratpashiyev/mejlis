@extends('layout',['title' => __('app.laws_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_code_law_decree_pages.css') }}">
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
                    ['name' => __('app.layout.legislation'), 'url' => '#'],
                    ['name' => __('app.mejlis_decrees_page.title'), 'url' => route('mejlis_decrees_page', ['lang'=>$current_lang->code])],
                    ['name' => $selected_decree->{'title_' . $current_lang->code}, 'url' => route(Route::currentRouteName(), ['id'=>$selected_decree->id,'lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="single_code_law_decree_pages flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.legislation') }}"/>

                <div class="right_side flex_column">

                    <div class="text_block">
                        <h4 class="text_title">{{ $selected_decree->{'title_' . $current_lang->code} }}</h4>
                        
                        <div class="text_content">
                            {!! $selected_decree->{'description_' . $current_lang->code} !!} 
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function (){
            const breadcrumb = $('.breadcrumbs_row a:last-child')
            if(breadcrumb.text().length > 100){
                breadcrumb.text(breadcrumb.text().slice(0, 100) + '...')
            }
        })  
    </script>
@endsection