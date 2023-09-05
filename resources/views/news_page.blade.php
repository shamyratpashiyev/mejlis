@extends('layout',['title' => __('app.news_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news_page.css') }}">
@endpush

@php
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.headlines'), 'url' => '#'],
                    ['name' => __('app.news_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')
<div class="news_page">

    <div class="news_section_main flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="title_row flex_row">
                <h2 class="title">@lang('app.main.headlines_section')</h2>
                <a href="#" class="news_page_link hover_underline flex_row">
                    <span>@lang('app.buttons.see_all')</span>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="grid_block">
                @if($news_big)
                    <a href="{{ route('single_news_page', ['lang'=>app()->getLocale(),'id'=>$news_big->id]) }}" class="news_container_big flex_column">
                        <div class="image_wrapper">
                            <img src="{{ asset($news_big['image']) }}" alt="">
                        </div>
                        <h3 class="title">{{ $news_big['title_' . $current_lang->code] }}</h3>
                        <div  class="content">
                            {!! $news_big['description_' . $current_lang->code] !!}
                        </div>
                        <span class="date">{{ date('d.m.Y',strtotime($news_big['event_date'])) }}</span>
                    </a>
                @endif

                @if ($news_small)
                    
                    <div class="news_block_scroll flex_column">
                        @foreach ($news_small as $news)
                            <a href="{{ route('single_news_page', ['lang'=>app()->getLocale(),'id'=>$news->id]) }}" class="news_container_small flex_row">
                                <div class="image_wrapper flex_row">
                                    <img src="{{ asset($news->image) }}" alt="">
                                </div>
                                <div class="content_block flex_column">
                                    <h4 class="title">{{ $news->{'title_' . $current_lang->code} }}</h4>
                                    <div class="content">
                                        {!! $news->{'description_' . $current_lang->code} !!}
                                    </div>
                                    <span class="date">{{ date('d.m.Y',strtotime($news->event_date)) }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

                @if($news_medium)
                    <div class="news_row_medium flex_row">
                        @foreach ($news_medium as $news)
                            <a href="{{ route('single_news_page', ['lang'=>app()->getLocale(),'id'=>$news->id]) }}" class="news_container_medium flex_column container_box_shadow">
                                <div class="image_wrapper">
                                    <img src="{{ asset($news->image) }}" alt="">
                                </div>
                                <div class="content_wrapper flex_column">
                                    <h4 class="title">{{ $news->{'title_' . $current_lang->code} }}</h4>
                                    <div class="content">
                                        {!! $news->{'description_' . $current_lang->code} !!}
                                    </div>
                                    <span class="date">{{ date('d.m.Y',strtotime($news->event_date)) }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="pagination_row flex_row">
                <a class="flex_row" style="align-items: center;" href="{{ route('news_page', ['page_num' => $prev_page, 'lang' => app()->getLocale()]) }}">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.3 12.8602L14.3 18.8602C14.5 19.0602 14.7 19.1602 15 19.1602C15.3 19.1602 15.5 19.0602 15.7 18.8602C16.1 18.4602 16.1 17.8602 15.7 17.4602L10.4 12.1602L15.7 6.86016C16.1 6.46016 16.1 5.86016 15.7 5.46016C15.3 5.06016 14.7 5.06016 14.3 5.46016L8.3 11.4602C7.9 11.8602 7.9 12.4602 8.3 12.8602Z" fill="black"/>
                    </svg>
                </a>

                @foreach ($pagination_array as $page)
                    @if($page == '...')
                        <span class="item">{{ $page }}</span>
                    @else
                        <a href="{{ route('news_page', ['page_num' => $page, 'lang' => app()->getLocale()]) }}" class="item @if($current_page == $page) active @endif">{{ $page }}</a>
                    @endif
                @endforeach

                <a href="{{ route('news_page', ['page_num' => $next_page, 'lang' => app()->getLocale()]) }}">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7 12.8602L9.7 18.8602C9.5 19.0602 9.3 19.1602 9 19.1602C8.7 19.1602 8.5 19.0602 8.3 18.8602C7.9 18.4602 7.9 17.8602 8.3 17.4602L13.6 12.1602L8.3 6.86016C7.9 6.46016 7.9 5.86016 8.3 5.46016C8.7 5.06016 9.3 5.06016 9.7 5.46016L15.7 11.4602C16.1 11.8602 16.1 12.4602 15.7 12.8602Z" fill="black"/>
                    </svg>
                </a>

            </div>
        </div>
    </div>

</div>

@endsection