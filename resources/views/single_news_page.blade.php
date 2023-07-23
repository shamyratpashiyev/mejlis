@extends('layout',['title' => __('app.news_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_news_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.news_page.title'), 'url' => route('news_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.articles_page.title'),'url' => route('articles_page',['lang' => app()->getLocale()])], 
                    ['name'=>__('app.mejlis_activities_page.title'), 'url' => route('mejlis_activities_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.gallery_page.title'), 'url' => route('gallery_page',['lang' => app()->getLocale()])],
    ];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.headlines'), 'url' => '#'],
                    ['name' => __('app.news_page.title'), 'url' => route('news_page', ['lang' => app()->getLocale()])],
                    ['name' => $selected_news["title_{$current_lang->code}"], 'url' => route(Route::currentRouteName(), ['id'=>$selected_news->id,'lang' => app()->getLocale()])],
    ];
@endphp

@section('content')
    <div class="single_news_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.headlines') }}"/>

                <div class="news_content_block flex_column">
                    <div class="image_wrapper flex_row">
                        <img src="{{ asset($selected_news->image) }}" alt="">
                    </div>

                    <div class="date_row flex_row">
                        <span class="date">{{ date('d.m.Y', strtotime($selected_news->event_date)) }}</span>
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>
                        <div class="langs_block flex_row">
                            @foreach ($active_langs as $lang)
                                <img class="flag_button {{ $lang->code == $current_lang->code ? 'active' : '' }}" id="{{ $lang->code }}" src="{{ asset('img/' . $lang->code . '.svg') }}" alt="">
                            @endforeach
                        </div>
                    </div>
                    @foreach ($active_langs as $lang)
                        <h2 id="{{ 'title_' . $lang->code }}" class="news_title {{ $lang->code == $current_lang->code ? 'active' : '' }}">
                            {{ $selected_news['title_' . $lang->code] }}
                        </h2>
                    @endforeach

                    @foreach ($active_langs as $lang)
                        <div id="{{ 'description_' . $lang->code }}" class="news_text {{ $lang->code == $current_lang->code ? 'active' : '' }}">
                            {!! $selected_news['description_' . $lang->code] !!}
                        </div>
                    @endforeach
                        
                </div>
            </div>

            <div class="related_news_block flex_column">

                <h3 class="block_title">@lang('app.news_page.relative_news')</h3>

                <div class="news_row flex_row">
                    @foreach ($relative_news as $news)
                        <a href="{{ route('single_news_page', ['lang'=>app()->getLocale(),'id'=>$news['id']]) }}" class="news_container_medium flex_column container_box_shadow">
                            <div class="image_wrapper">
                                <img src="{{ asset($news->image) }}" alt="">
                            </div>
                            <div class="content_wrapper flex_column">
                                <h4 class="title">{{ $news->{"title_" . $current_lang->code} }}</h4>
                                <div class="content">
                                    {!! $news->{"description_" . $current_lang->code} !!}
                                </div>
                                <span class="date">{{ date('d.m.Y', strtotime($news->event_date)) }}</span>
                            </div>
                        </a>
                    @endforeach


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

            $('.flag_button').on('click', (event) =>{
                $('.news_title, .news_text').removeClass('active');
                $(`.news_title#title_${event.target.id}, .news_text#description_${event.target.id}`).addClass('active');
                $('.flag_button').removeClass('active');
                $(event.target).addClass('active');
            })
        });
    </script>
@endsection