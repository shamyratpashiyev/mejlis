<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl_slider/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl_slider/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick/slick-theme.css') }}">
    @stack('styles')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    
</head>
<body>
    <div class="top_header flex_row">
        <div class="inner_wrapper flex_column">
            <img src="{{ asset('img/mejlis_building.svg') }}" alt="">
            <h3 class="logo_text">@lang('app.layout.logo_title')</h3>

            <div class="lang_wrapper flex_row">
                <svg class="globe" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 11C21 16.5228 16.5228 21 11 21M21 11C21 5.47715 16.5228 1 11 1M21 11C21 9.34315 16.5228 8 11 8C5.47715 8 1 9.34315 1 11M21 11C21 12.6569 16.5228 14 11 14C5.47715 14 1 12.6569 1 11M11 21C5.47715 21 1 16.5228 1 11M11 21C13.2091 21 15 16.5228 15 11C15 5.47715 13.2091 1 11 1M11 21C8.79086 21 7 16.5228 7 11C7 5.47715 8.79086 1 11 1M1 11C1 5.47715 5.47715 1 11 1" stroke="white" stroke-width="1.5"/>
                </svg>
                    
                <span class="current_lang">{{ $current_lang->label }}</span>
                <svg class="chevron_down" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10L12 14L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                    
                <div class="lang_menu flex_column">
                    @foreach ($active_langs as $lang)
                        @if ($lang->code != app()->getLocale())
                            <a class="lang_item" href="{{ request()->url() }}?lang={{ $lang->code }}">{{ $lang->label }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_header flex_row">
        <div class="inner_wrapper flex_row">
            <div class="nav_block flex_row">
                <a class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed('main_page')) active @endif" href="{{ route('main_page',['lang'=>app()->getLocale()]) }}">
                    <span>@lang('app.layout.main_page')</span>
                </a>

                <div class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed(['mejlis_history_page','convocation_page'])) active @endif">
                    <span>@lang('app.layout.about_mejlis')</span>

                    <div class="dropdown_menu flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_history_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_history_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('convocation_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.convocation_page',['number'=>$convocation_number])</a>
                        </div>
                        
                    </div>
                </div>

                <div class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed(['mejlis_committees_page','mejlis_deputies_page','single_deputy_page'])) active @endif">
                    <span>@lang('app.layout.mejlis_structure')</span>

                    <div class="dropdown_menu flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_committees_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_committees_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_deputies_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_deputies_page')</a>
                        </div>
                    </div>
                </div>

                <div class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed(['codes_page','single_code_page','laws_page','single_law_page','mejlis_decrees_page','single_decree_page','constitutional_law_page'])) active @endif">
                    <span>@lang('app.layout.legislation')</span>

                    <div class="dropdown_menu flex_column">
                        {{-- <div class="item_wrapper hover_underline">
                            <a href="{{ route('bills_discussion_page') }}">Законопроекты на обсуждение</a>
                        </div> --}}
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('codes_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.codes_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('laws_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.laws_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_decrees_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_decrees_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('constitutional_law_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.constitutional_law_page')</a>
                        </div>
                    </div>
                </div>

                <div class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed(['international_cooperation_page','single_news_cooperation_page','friendship_group_page', 'news_international_page','single_news_international_page'])) active @endif">
                    <span>@lang('app.layout.international')</span>

                    <div class="dropdown_menu flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('international_cooperation_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.international_cooperation_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('friendship_group_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.friendship_groups_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('news_international_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.news_page')</a>
                        </div>
                    </div>
                </div>

                <div class="nav_button_wrapper hover_underline @if(Route::currentRouteNamed(['news_page','single_news_page','articles_page','single_article_page', 'mejlis_activities_page','single_activity_page', 'gallery_page'])) active @endif">
                    <span>@lang('app.layout.headlines')</span>

                    <div class="dropdown_menu flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('news_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.news_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('articles_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.articles_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_activities_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_activities_page')</a>
                        </div>
                        {{-- <div class="item_wrapper hover_underline">
                            <a href="{{ route('gallery_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.gallery_page')</a>
                        </div> --}}
                    </div>
                </div>

                <a href="{{ route('tkm_history_page',['lang'=>app()->getLocale()]) }}" class="nav_button_wrapper hover_underline @if(Route::current()->getPrefix() == '/turkmenistan') active @endif">
                    <span>@lang('app.layout.tkm_page')</span>
                </a>
            </div>
            <div class="hamburger_button flex_column">
                <span></span>
            </div>
        </div>
    </div>

    <div class="hamburger_menu flex_column">
        <div class="hamburger_close_button">
            <span></span>
        </div>
        <div class="inner_wrapper flex_column">
            <div class="top_block flex_column">
                <img class="building_img" src="{{ asset('img/mejlis_building.svg') }}" alt="">
                <hr/>
                <p class="title">@lang('app.layout.logo_title')</p>
                {{-- <span class="info">@lang('app.layout.logo_description')</span> --}}
            </div>

            <div class="nav_block flex_column">
                <a class="hover_underline @if(Route::currentRouteNamed(['main_page'])) active @endif" href="{{ route('main_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.main_page')</a>
                <div class="nav_button_wrapper flex_column  @if(Route::currentRouteNamed(['mejlis_history_page','convocation_page'])) active @endif" data-id="1">
                    <span>@lang('app.layout.about_mejlis')</span>

                    <div class="dropdown_menu hamburger flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_history_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_history_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('convocation_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.convocation_page',['number'=>$convocation_number])</a>
                        </div>
                        
                    </div>
                </div>
                <div class="nav_button_wrapper flex_column  @if(Route::currentRouteNamed(['mejlis_committees_page','mejlis_deputies_page','single_deputy_page'])) active @endif" data-id="2">
                    <span>@lang('app.layout.mejlis_structure')</span>

                    <div class="dropdown_menu hamburger flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_committees_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_committees_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_deputies_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_deputies_page')</a>
                        </div>
                    </div>
                </div>
                {{-- <a class="hover_underline" href="#">@lang('app.layout.media')</a> --}}
                <div class="nav_button_wrapper flex_column  @if(Route::currentRouteNamed(['international_cooperation_page','single_news_cooperation_page','friendship_group_page', 'news_international_page','single_news_international_page'])) active @endif" data-id="3">
                    <span>@lang('app.layout.international')</span>

                    <div class="dropdown_menu hamburger flex_column">
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('international_cooperation_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.international_cooperation_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('friendship_group_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.friendship_groups_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('news_international_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.news_page')</a>
                        </div>
                    </div>
                </div>
                <div class="nav_button_wrapper flex_column  @if(Route::currentRouteNamed(['codes_page','single_code_page','laws_page','single_law_page','mejlis_decrees_page','single_decree_page','constitutional_law_page'])) active @endif" data-id="4">
                    <span>@lang('app.layout.legislation')</span>

                    <div class="dropdown_menu hamburger flex_column">
                        {{-- <div class="item_wrapper hover_underline">
                            <a href="{{ route('bills_discussion_page') }}">Законопроекты на обсуждение</a>
                        </div> --}}
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('codes_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.codes_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('laws_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.laws_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('mejlis_decrees_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.mejlis_decrees_page')</a>
                        </div>
                        <div class="item_wrapper hover_underline">
                            <a href="{{ route('constitutional_law_page',['lang'=>app()->getLocale()]) }}">@lang('app.layout.constitutional_law_page')</a>
                        </div>
                    </div>
                </div>
                <a class="hover_underline" href="{{ route('contacts_page',['lang' => app()->getLocale()]) }}">@lang('app.layout.contacts_page')</a>
            </div>

            <div class="lang_block flex_row">

                <div class="lang_wrapper flex_row">
                    <svg class="globe" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 11C21 16.5228 16.5228 21 11 21M21 11C21 5.47715 16.5228 1 11 1M21 11C21 9.34315 16.5228 8 11 8C5.47715 8 1 9.34315 1 11M21 11C21 12.6569 16.5228 14 11 14C5.47715 14 1 12.6569 1 11M11 21C5.47715 21 1 16.5228 1 11M11 21C13.2091 21 15 16.5228 15 11C15 5.47715 13.2091 1 11 1M11 21C8.79086 21 7 16.5228 7 11C7 5.47715 8.79086 1 11 1M1 11C1 5.47715 5.47715 1 11 1" stroke="white" stroke-width="1.5"/>
                    </svg>
                        
                    <span class="current_lang">{{ $current_lang->label }}</span>
                    <svg class="chevron_down" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 14L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        
                    <div class="lang_menu flex_column">
                        @foreach ($active_langs as $lang)
                            @if ($lang->code != app()->getLocale())
                                <a class="lang_item" href="{{ request()->url() }}?lang={{ $lang->code }}">{{ $lang->label }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    
    <footer class="flex_row">
        <div class="inner_wrapper flex_row">

            <a href="{{ route('main_page',['lang'=>app()->getLocale()]) }}" class="left_column flex_column">
                <div class="image_wrapper">
                    <img src="{{ asset('img/mejlis_building.svg') }}" alt="">
                </div>

                <h4 class="title">@lang('app.layout.logo_title')</h4>
                <p class="description">@lang('app.layout.logo_description')</p>
                <span class="copyright_text">{{ date('Y') }} @lang('app.layout.copyright_text')</span>
            </a>

            <div class="middle_column flex_column">
                <h3 class="title">@lang('app.layout.about_mejlis')</h3>
                <p class="description">
                    @lang('app.layout.footer_text')
                </p>
            </div>

            <div class="right_column flex_column">
                <a href="{{ route('contacts_page',['lang'=>app()->getLocale()]) }}" class="title">@lang('app.layout.contacts_page')</a>
                <p class="flex_row contact_row_wrapper">
                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" stroke="white"/>
                        <path d="M18 9C18 12.3137 14 17 12 17C10 17 6 12.3137 6 9C6 5.68629 8.68629 3 12 3C15.3137 3 18 5.68629 18 9Z" stroke="white"/>
                        <path d="M14.9994 15H16.1259C17.313 15 18.4388 15.5273 19.1987 16.4393L20.2657 17.7196C21.3513 19.0223 20.425 21 18.7293 21H5.26945C3.57377 21 2.64746 19.0223 3.733 17.7196L4.79998 16.4393C5.55995 15.5273 6.68574 15 7.87286 15H8.99936" stroke="white" stroke-linejoin="round"/>
                    </svg>
                    <span>@lang('app.layout.footer_address_value')</span>
                </p>

                <a class="flex_row contact_row_wrapper" href="mailto:info@mejlis.gov.tm">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10.5V6.125C2 4.192 3.79086 2.625 6 2.625H18C20.2091 2.625 22 4.192 22 6.125V14.875C22 16.808 20.2091 18.375 18 18.375H8M6 7L9.7812 9.2057C11.1248 9.98947 12.8752 9.98947 14.2188 9.2057L18 7M2 13.125H8M2 15.75H8" stroke="white" stroke-linecap="round"/>
                    </svg>
                    <span>info@mejlis.gov.tm</span>
                </a>

                <a class="flex_row contact_row_wrapper" href="tel:+9912214792">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 16L14.9019 16.4903C15.123 16.5345 15.3464 16.4253 15.4472 16.2236L15 16ZM8 9L7.77639 8.55279C7.57472 8.65362 7.46549 8.87696 7.50971 9.09806L8 9ZM8.35402 8.82299L8.57762 9.27021L8.35402 8.82299ZM9.31654 6.29136L9.78078 6.10566L9.31654 6.29136ZM8.50289 4.25722L8.03865 4.44291L8.50289 4.25722ZM19.7428 15.4971L19.5571 15.9614L19.7428 15.4971ZM17.7086 14.6835L17.8943 14.2192H17.8943L17.7086 14.6835ZM15.177 15.646L15.6242 15.8696L15.6242 15.8696L15.177 15.646ZM16.5 11C16.5 11.2761 16.7239 11.5 17 11.5C17.2761 11.5 17.5 11.2761 17.5 11H16.5ZM16.6955 9.46927L17.1575 9.27792L16.6955 9.46927ZM14.5307 7.30448L14.7221 6.84254L14.5307 7.30448ZM13 6.5C12.7239 6.5 12.5 6.72386 12.5 7C12.5 7.27614 12.7239 7.5 13 7.5V6.5ZM20.5 11C20.5 11.2761 20.7239 11.5 21 11.5C21.2761 11.5 21.5 11.2761 21.5 11H20.5ZM20.391 7.93853L20.853 7.74719L20.391 7.93853ZM16.0615 3.60896L16.2528 3.14702V3.14702L16.0615 3.60896ZM13 2.5C12.7239 2.5 12.5 2.72386 12.5 3C12.5 3.27614 12.7239 3.5 13 3.5V2.5ZM20.5 17.3541V19H21.5V17.3541H20.5ZM5 3.5H6.64593V2.5H5V3.5ZM15 16C15.0981 15.5097 15.0982 15.5097 15.0983 15.5098C15.0984 15.5098 15.0985 15.5098 15.0985 15.5098C15.0987 15.5098 15.0987 15.5098 15.0988 15.5099C15.0989 15.5099 15.0988 15.5099 15.0986 15.5098C15.0982 15.5097 15.0972 15.5095 15.0956 15.5092C15.0924 15.5085 15.087 15.5074 15.0792 15.5057C15.0638 15.5022 15.0394 15.4967 15.0068 15.4888C14.9417 15.4729 14.8439 15.4476 14.7192 15.4109C14.4696 15.3375 14.1136 15.219 13.697 15.0404C12.8614 14.6823 11.7959 14.0888 10.8536 13.1464L10.1464 13.8536C11.2041 14.9112 12.3886 15.5677 13.303 15.9596C13.7614 16.156 14.1554 16.2875 14.437 16.3703C14.578 16.4118 14.6911 16.4411 14.7705 16.4604C14.8102 16.4701 14.8415 16.4772 14.8636 16.4821C14.8747 16.4846 14.8835 16.4865 14.8899 16.4878C14.8931 16.4885 14.8957 16.489 14.8977 16.4894C14.8988 16.4896 14.8996 16.4898 14.9003 16.49C14.9007 16.49 14.901 16.4901 14.9012 16.4901C14.9014 16.4902 14.9016 16.4902 14.9016 16.4902C14.9018 16.4903 14.9019 16.4903 15 16ZM10.8536 13.1464C9.91117 12.2041 9.31767 11.1386 8.95957 10.303C8.78101 9.8864 8.66247 9.5304 8.58906 9.28079C8.55238 9.1561 8.52707 9.0583 8.51122 8.99315C8.5033 8.96059 8.49776 8.93622 8.49435 8.92077C8.49264 8.91305 8.49147 8.90755 8.4908 8.90438C8.49047 8.9028 8.49026 8.9018 8.49018 8.90139C8.49014 8.90118 8.49013 8.90112 8.49014 8.90122C8.49015 8.90126 8.49017 8.90134 8.49019 8.90147C8.49021 8.90153 8.49023 8.90165 8.49024 8.90168C8.49026 8.9018 8.49029 8.90194 8 9C7.50971 9.09806 7.50974 9.09822 7.50977 9.09838C7.50979 9.09845 7.50982 9.09863 7.50985 9.09876C7.50991 9.09904 7.50997 9.09935 7.51004 9.0997C7.51018 9.1004 7.51035 9.10125 7.51056 9.10225C7.51097 9.10426 7.51151 9.10687 7.51219 9.11008C7.51354 9.11649 7.51542 9.12528 7.51786 9.13636C7.52275 9.1585 7.5299 9.1898 7.53956 9.2295C7.55887 9.30889 7.58824 9.42202 7.62969 9.56296C7.71253 9.8446 7.84399 10.2386 8.04043 10.697C8.43233 11.6114 9.08883 12.7959 10.1464 13.8536L10.8536 13.1464ZM8.22361 9.44721L8.57762 9.27021L8.13041 8.37578L7.77639 8.55279L8.22361 9.44721ZM9.78078 6.10566L8.96713 4.07152L8.03865 4.44291L8.8523 6.47705L9.78078 6.10566ZM19.9285 15.0329L17.8943 14.2192L17.5229 15.1477L19.5571 15.9614L19.9285 15.0329ZM14.7298 15.4224L14.5528 15.7764L15.4472 16.2236L15.6242 15.8696L14.7298 15.4224ZM17.8943 14.2192C16.6871 13.7363 15.3113 14.2594 14.7298 15.4224L15.6242 15.8696C15.9731 15.1718 16.7986 14.858 17.523 15.1477L17.8943 14.2192ZM8.57762 9.27021C9.74058 8.68873 10.2637 7.31289 9.78078 6.10566L8.8523 6.47705C9.14204 7.20139 8.82818 8.02689 8.13041 8.37578L8.57762 9.27021ZM6.64593 3.5C7.25929 3.5 7.81085 3.87343 8.03865 4.44291L8.96713 4.07152C8.58747 3.12238 7.6682 2.5 6.64593 2.5V3.5ZM21.5 17.3541C21.5 16.3318 20.8776 15.4125 19.9285 15.0329L19.5571 15.9614C20.1266 16.1891 20.5 16.7407 20.5 17.3541H21.5ZM19 20.5C10.4396 20.5 3.5 13.5604 3.5 5H2.5C2.5 14.1127 9.8873 21.5 19 21.5V20.5ZM19 21.5C20.3807 21.5 21.5 20.3807 21.5 19H20.5C20.5 19.8284 19.8284 20.5 19 20.5V21.5ZM3.5 5C3.5 4.17157 4.17157 3.5 5 3.5V2.5C3.61929 2.5 2.5 3.61929 2.5 5H3.5ZM17.5 11C17.5 10.4091 17.3836 9.82389 17.1575 9.27792L16.2336 9.66061C16.4095 10.0852 16.5 10.5404 16.5 11H17.5ZM17.1575 9.27792C16.9313 8.73196 16.5998 8.23588 16.182 7.81802L15.4749 8.52513C15.7999 8.85013 16.0577 9.23597 16.2336 9.66061L17.1575 9.27792ZM16.182 7.81802C15.7641 7.40016 15.268 7.06869 14.7221 6.84254L14.3394 7.76642C14.764 7.94231 15.1499 8.20012 15.4749 8.52513L16.182 7.81802ZM14.7221 6.84254C14.1761 6.6164 13.5909 6.5 13 6.5V7.5C13.4596 7.5 13.9148 7.59053 14.3394 7.76642L14.7221 6.84254ZM21.5 11C21.5 9.88376 21.2801 8.77846 20.853 7.74719L19.9291 8.12987C20.306 9.03982 20.5 10.0151 20.5 11H21.5ZM20.853 7.74719C20.4258 6.71592 19.7997 5.77889 19.0104 4.98959L18.3033 5.6967C18.9997 6.39314 19.5522 7.21993 19.9291 8.12987L20.853 7.74719ZM19.0104 4.98959C18.2211 4.20029 17.2841 3.57419 16.2528 3.14702L15.8701 4.0709C16.7801 4.44781 17.6069 5.00026 18.3033 5.6967L19.0104 4.98959ZM16.2528 3.14702C15.2215 2.71986 14.1162 2.5 13 2.5V3.5C13.9849 3.5 14.9602 3.69399 15.8701 4.0709L16.2528 3.14702Z" fill="white"/>
                    </svg>
                    <span>(+9912) 21-47-92</span>
                </a>

                <a class="flex_row contact_row_wrapper" href="tel:+9912924560">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.35355 8.64645C9.15829 8.45118 8.84171 8.45118 8.64645 8.64645C8.45118 8.84171 8.45118 9.15829 8.64645 9.35355L9.35355 8.64645ZM13.4142 10.5858L13.0607 10.2322L13.4142 10.5858ZM15.3536 9.35355C15.5488 9.15829 15.5488 8.84171 15.3536 8.64645C15.1583 8.45118 14.8417 8.45118 14.6464 8.64645L15.3536 9.35355ZM11.5 11C11.5 11.2761 11.7239 11.5 12 11.5C12.2761 11.5 12.5 11.2761 12.5 11H11.5ZM12.5 6C12.5 5.72386 12.2761 5.5 12 5.5C11.7239 5.5 11.5 5.72386 11.5 6H12.5ZM7.6 13.8L7.2 14.1L7.6 13.8ZM8.8 15.4L9.2 15.1L8.8 15.4ZM15.2 15.4L14.8 15.1L15.2 15.4ZM16.4 13.8L16 13.5L16.4 13.8ZM8.64645 9.35355L10.2322 10.9393L10.9393 10.2322L9.35355 8.64645L8.64645 9.35355ZM13.7678 10.9393L15.3536 9.35355L14.6464 8.64645L13.0607 10.2322L13.7678 10.9393ZM12.5 11V6H11.5V11H12.5ZM10.2322 10.9393C11.2085 11.9156 12.7915 11.9157 13.7678 10.9393L13.0607 10.2322C12.4749 10.818 11.5251 10.818 10.9393 10.2322L10.2322 10.9393ZM21.5 16V19H22.5V16H21.5ZM19 21.5H5V22.5H19V21.5ZM2.5 19V16H1.5V19H2.5ZM5 13.5H6V12.5H5V13.5ZM7.2 14.1L8.4 15.7L9.2 15.1L8 13.5L7.2 14.1ZM18 13.5H19V12.5H18V13.5ZM15.6 15.7L16.8 14.1L16 13.5L14.8 15.1L15.6 15.7ZM12 17.5C13.4164 17.5 14.7502 16.8331 15.6 15.7L14.8 15.1C14.139 15.9813 13.1017 16.5 12 16.5V17.5ZM18 12.5C17.2131 12.5 16.4721 12.8705 16 13.5L16.8 14.1C17.0833 13.7223 17.5279 13.5 18 13.5V12.5ZM8.4 15.7C9.24984 16.8331 10.5836 17.5 12 17.5V16.5C10.8983 16.5 9.86099 15.9813 9.2 15.1L8.4 15.7ZM6 13.5C6.47214 13.5 6.91672 13.7223 7.2 14.1L8 13.5C7.52786 12.8705 6.78689 12.5 6 12.5V13.5ZM5 21.5C3.61929 21.5 2.5 20.3807 2.5 19H1.5C1.5 20.933 3.067 22.5 5 22.5V21.5ZM21.5 19C21.5 20.3807 20.3807 21.5 19 21.5V22.5C20.933 22.5 22.5 20.933 22.5 19H21.5ZM22.5 16C22.5 14.067 20.933 12.5 19 12.5V13.5C20.3807 13.5 21.5 14.6193 21.5 16H22.5ZM2.5 16C2.5 14.6193 3.61929 13.5 5 13.5V12.5C3.067 12.5 1.5 14.067 1.5 16H2.5ZM20.5 13V6H19.5V13H20.5ZM16 1.5H8V2.5H16V1.5ZM3.5 6V13H4.5V6H3.5ZM8 1.5C5.51472 1.5 3.5 3.51472 3.5 6H4.5C4.5 4.067 6.067 2.5 8 2.5V1.5ZM20.5 6C20.5 3.51472 18.4853 1.5 16 1.5V2.5C17.933 2.5 19.5 4.067 19.5 6H20.5Z" fill="white"/>
                    </svg>
                    <span>(+9912) 92-45-60</span>
                </a>
            </div>

        </div>
    </footer>


    <script>
        $(document).ready(()=>{

            // $(".banner_slider").slick({
            //     arrows: false,
            //     adaptiveHeight: true,
            //     autoplay: true,
            //     autoplaySpeed: 6000,
            //     speed: 1000,
            //     pauseOnFocuse: false,
            //     pauseOnHover: false,
            //     slidesToShow: 1,
            //     centerMode: true,
            //     variableWidth: true
            // });

            $('.hamburger_button').click((e) => {
                $('.hamburger_menu').addClass('active');
                // $('.upper_header').toggleClass('blur');
            })

            $('.hamburger_close_button').on('click',(e) => {
                $('.hamburger_menu').removeClass('active');
            })

            // $('.blur_effect').on('click',()=>{
            //     $('.hamburger_menu').removeClass('active');
            //     $('.upper_header').removeClass('blur');
            // })

            $('body').on('click',(e) => {
                if($(e.target).hasClass('lang_wrapper') || $(e.target).parents().hasClass('lang_wrapper')){
                    $('.lang_wrapper').addClass('active');
                } else {
                    $('.lang_wrapper').removeClass('active');
                }
            })

            
            const nav_button_wrapper = $('.hamburger_menu .nav_button_wrapper');
            const hamburger_dropdown_menu = $('.dropdown_menu.hamburger');


            let nav_buttons_initial_height = ['']
            let dropdown_menus_height = ['']

            nav_button_wrapper.css('height', nav_button_wrapper.outerHeight())
            hamburger_dropdown_menu.css('display', 'flex');

            hamburger_dropdown_menu.each((index,elem)=>{
                dropdown_menus_height.push($(elem).outerHeight())
            })          //Getting the heights of dropdown menus (each one of them can have different height)
                  
            nav_button_wrapper.each((index,elem)=>{
                nav_buttons_initial_height.push( parseInt($(elem).outerHeight()) )
            })              //Getting the heights of nav_buttons (each one of them can have different height)
            

            nav_button_wrapper.on('click',(event)=>{
                const target = $(event.target).hasClass('.hamburger_menu') ? $(event.target) : $(event.target).parents('.hamburger_menu .nav_button_wrapper')

                if(target.hasClass('active')){
                    target.removeClass('active')
                    target.css('height', nav_buttons_initial_height[target.data('id')] + 'px')
                } else {
                    nav_button_wrapper.removeClass('active')
                    nav_button_wrapper.each((index,elem)=>{
                        $(elem).css('height', nav_buttons_initial_height[$(elem).data('id')] + 'px')
                    })

                    target.css('height', (nav_buttons_initial_height[target.data('id')] + dropdown_menus_height[target.data('id')]) + 'px')
                    target.addClass('active')

                }
               
            })

        })
        
    </script>
</body>
</html>