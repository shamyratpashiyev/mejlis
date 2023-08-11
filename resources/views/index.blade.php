@extends('layout',['title' => __('app.main.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
@endpush

@section('content')
<div class="sections_container">

    <div class="news_section_main flex_row">
        <div class="inner_wrapper flex_column">
            <div class="title_row flex_row">
                <h2 class="title">@lang('app.main.headlines_section')</h2>
                <a href="{{ route('news_page',['lang' => app()->getLocale()]) }}" class="news_page_link hover_underline flex_row">
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
        </div>
    </div>

    <div class="activities_section flex_row">
        <div class="inner_wrapper flex_column">
            <h2 class="title">@lang('app.main.mejlis_activities_section')</h2>

            <div class="activities_row flex_row">
                @foreach ($mejlis_activities as $activity)
                    <div class="activity_container flex_column container_box_shadow" data-href-value="{{ route('single_activity_page',['id'=>$activity->id,'lang'=>app()->getLocale()]) }}">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>
                        <h3 class="title">{{ $activity->{'title_' . $current_lang->code} }}</h3>
                        <div class="content">
                            {!! $activity->{'description_' . $current_lang->code} !!}
                        </div>
                        <div class="bottom_row flex_row">
                            <span class="date">{{ date('d.m.Y', strtotime($activity->event_date)) }}</span>
                            <a href="{{ route('single_activity_page',['id'=>$activity->id,'lang'=>app()->getLocale()]) }}" class="flex_row hover_underline">
                                <span>@lang('app.buttons.more_button')</span>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('sections.deputies_section_main')

    <div class="legislation_section flex_row">
        <div class="inner_wrapper">
            <h2 class="section_title">@lang('app.main.legislation_section')</h2>
            <div class="content_row flex_row">

                @foreach ($laws_4 as $law)
                    <div class="legislation_container flex_column container_box_shadow" data-href-value="{{ route('single_law_page',['id'=>$law->id,'lang'=>app()->getLocale()]) }}">

                        <div class="upper_block flex_column">
                            <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                                <mask id="path-2-inside-1_113_1071" fill="white">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                                </mask>
                                <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                                <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                            </svg>

                            <p class="title">
                                {{ $law->{'title_' . $current_lang->code} }}
                            </p>
                        </div>

                        <div class="bottom_row flex_row">
                            <span class="date">{{ date('d.m.Y', strtotime($law->published_date)) }}</span>
                            <a href="{{ route('single_law_page',['id'=>$law->id,'lang'=>app()->getLocale()]) }}" class="flex_row hover_underline">
                                <span>@lang('app.buttons.more_button')</span>
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 17L14.5 12L10.5 7" stroke="#0080C7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('sections.websites_section_main')

</div>

<script>
const window_height = window.innerHeight
// let scroll_dir = 'down'
// $('.upper_header').css('display', 'block')

$(document).ready(() => {

    // if($(window).scrollTop() > 5) {
    //     $('.upper_header').addClass('hidden')
    // }
    $('.legislation_container').on('click', (event)=>{
        if($(event.target).data('href-value')){
            window.location.assign($(event.target).data('href-value'))
        } else{
            window.location.assign($(event.target).parents('.legislation_container').data('href-value'))
        }
    })

    $('.activity_container').on('click', (event)=>{
        if($(event.target).data('href-value')){
            window.location.assign($(event.target).data('href-value'))
        } else{
            window.location.assign($(event.target).parents('.activity_container').data('href-value'))
        }
    })
})
// $(window).on('scroll',(event)=> {

//     if($(window).scrollTop() > 150){
//         scroll_dir = 'up'
//     }

//     if($(window).scrollTop() > 5 && scroll_dir == 'down') {
//         $('.upper_header').addClass('hidden')
//         $('.upper_header .active').removeClass('active')
//         $('.upper_header.blur').removeClass('blur')

//     }  else if($(window).scrollTop() == 0 && scroll_dir == 'up'){
//         $('.upper_header').removeClass('hidden')
//         scroll_dir = 'down'
//     }

// });

</script>
@endsection
 