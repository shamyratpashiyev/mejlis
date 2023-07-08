<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mejlis</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
    <header>
        <div class="upper_block">
            <div class="main flex_column">
                <div class="topbar flex_row">
                    <a href="#" class="logo_wrapper flex_row">
                        <img class="logo_img" src="{{ asset('/img/logo.svg') }}" alt="">
                        <span class="logo_text">TÜRKMENISTANYŇ<br/> MEJLISI</span>
                    </a>

                    <div class="lang_hamburger_wrapper flex_row">
                        <div class="lang_wrapper flex_row">
                            <img src="{{ asset('img/globe.svg') }}" alt="">
                            <span class="current_lang">Türkmençe</span>
                            <img src="{{ asset('img/chevron_down.svg') }}" alt="">
                            <div class="lang_menu flex_column">
                                <span>Русский</span>
                                <span>English</span>
                            </div>
                        </div>

                        <div class="hamburger_wrapper flex_column" id="hamburger_button">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="content flex_row">
                    <div class="inner_wrapper flex_column">
                        <img class="building_img" src="{{ asset('img/mejlis_building.svg') }}" alt="">
                        <hr/>
                        <p class="title">TÜRKMENISTANYŇ MEJLISI</p>
                        <span class="info">kanun çykaryjy häkimiýeti amala aşyrýan wekilçilikli edara</span>
                    </div>
                </div>

                <div class="hamburger_menu flex_column">
                    <div class="inner_wrapper flex_column">
                        <div class="top_block flex_column">
                            <img class="building_img" src="{{ asset('img/mejlis_building.svg') }}" alt="">
                            <hr/>
                            <p class="title">TÜRKMENISTANYŇ MEJLISI</p>
                            <span class="info">kanun çykaryjy häkimiýeti amala aşyrýan wekilçilikli edara</span>
                        </div>

                        <div class="nav_block flex_column">
                            <a class="hover_underline" href="#">Baş sahypa</a>
                            <a class="hover_underline" href="#">Mejlis hakynda</a>
                            <a class="hover_underline" href="#">Düzümi we gurluşygy</a>
                            <a class="hover_underline" href="#">Media</a>
                            <a class="hover_underline" href="#">Halkara</a>
                            <a class="hover_underline" href="#">Kanunçylyk</a>
                            <a class="hover_underline" href="#">Habarlaşmak üçin</a>
                        </div>

                        <div class="lang_block flex_row">
                            <div class="lang_wrapper flex_row">
                                <img src="{{ asset('img/globe.svg') }}" alt="">
                                <span class="current_lang">Türkmençe</span>
                                <img src="{{ asset('img/chevron_down.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower_block flex_row">
            <div class="inner_wrapper flex_row">
                <div class="nav_block flex_row">
                    <a class="nav_button_wrapper hover_underline" href="#">
                        <span>Baş sahypa</span>
                    </a>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Mejlis hakynda</span>
                    </div>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Düzümi we gurluşygy</span>
                    </div>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Kanunçylyk</span>
                    </div>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Halkara</span>
                    </div>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Habarlar</span>
                    </div>

                    <div class="nav_button_wrapper hover_underline">
                        <span>Türkmenistan</span>
                    </div>
                </div>
                <div class="hamburger_block">
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    
    <script>
        $('#hamburger_button').click((e) => {
            $('.hamburger_menu').toggleClass('active');
            $('#hamburger_button').toggleClass('active');
        })

        $('.lang_wrapper').click((e) => {
            $('.lang_wrapper').toggleClass('active');
        })
    </script>
</body>
</html>