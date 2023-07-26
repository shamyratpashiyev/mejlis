@extends('layout',['title' => __('app.international_cooperation_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/international_cooperation_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.international_cooperation_page.title'),'is_active'=>'active', 'url' => route('international_cooperation_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.friendship_group_page.title'),'url' => route('friendship_group_page',['lang' => app()->getLocale()])], 
                    ['name'=>__('app.news_international_page.title'), 'url' => route('news_international_page',['lang' => app()->getLocale()])],
    ];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.international'), 'url' => '#'],
                    ['name' => __('app.international_cooperation_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="international_cooperation_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.international') }}"/>

                <div class="right_side flex_column">
                    @foreach ($news_current_page as $news)
                        <a href="{{ route('single_news_cooperation_page',['id'=>$news->id,'lang'=>app()->getLocale()]) }}" class="item_container flex_row">
                            <div class="text_block flex_column">
                                <h3 class="title">{{ $news->{'title_' . app()->getLocale()} }}</h3>
                                <div class="content">
                                    {!! $news->{'description_' . app()->getLocale()} !!}
                                </div>
                                <span class="date">{{ date('d.m.Y', strtotime($news->event_date)) }}</span>
                            </div>

                            <div class="image_wrapper">
                                <img src="{{ asset($news->image_1) }}" alt="">
                            </div>
                        </a>
                    @endforeach


                </div>
                
            </div>

            <div class="pagination_row flex_row">
                <a class="flex_row" style="align-items: center;" href="{{ route('international_cooperation_page', ['page_num' => $prev_page, 'lang' => app()->getLocale()]) }}">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.3 12.8602L14.3 18.8602C14.5 19.0602 14.7 19.1602 15 19.1602C15.3 19.1602 15.5 19.0602 15.7 18.8602C16.1 18.4602 16.1 17.8602 15.7 17.4602L10.4 12.1602L15.7 6.86016C16.1 6.46016 16.1 5.86016 15.7 5.46016C15.3 5.06016 14.7 5.06016 14.3 5.46016L8.3 11.4602C7.9 11.8602 7.9 12.4602 8.3 12.8602Z" fill="black"/>
                    </svg>
                </a>

                @foreach ($pagination_array as $page)
                    @if($page == '...')
                        <span class="item">{{ $page }}</span>
                    @else
                        <a href="{{ route('international_cooperation_page', ['page_num' => $page, 'lang' => app()->getLocale()]) }}" class="item @if($current_page == $page) active @endif">{{ $page }}</a>
                    @endif
                @endforeach

                <a href="{{ route('international_cooperation_page', ['page_num' => $next_page, 'lang' => app()->getLocale()]) }}">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7 12.8602L9.7 18.8602C9.5 19.0602 9.3 19.1602 9 19.1602C8.7 19.1602 8.5 19.0602 8.3 18.8602C7.9 18.4602 7.9 17.8602 8.3 17.4602L13.6 12.1602L8.3 6.86016C7.9 6.46016 7.9 5.86016 8.3 5.46016C8.7 5.06016 9.3 5.06016 9.7 5.46016L15.7 11.4602C16.1 11.8602 16.1 12.4602 15.7 12.8602Z" fill="black"/>
                    </svg>
                </a>

            </div>
        </div>
    </div>
    
@endsection