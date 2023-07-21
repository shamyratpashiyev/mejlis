@extends('layout',['title' => __('app.mejlis_deputies_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_deputies_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_committees_page.title'), 'url' => route('mejlis_committees_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.mejlis_deputies_page.title'),'url' => route('mejlis_deputies_page',['lang' => app()->getLocale()])], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.mejlis_structure_page'), 'url' => '#'],
                    ['name' => __('app.mejlis_committees_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    $deputy_description = "<p>
            Kasymguly Gulmyradowiç Babaýew 1966-njy ýylyň 12-nji sentýabrynda Ahal welaýatynyň Ak bugdaý etrabynyň Gämi obasynda doguldy. Milleti türkmen.
            1973 — 1983-nji ýyllarda Ahal welaýaty- nyň Ak bugdaý etrabyndaky l-nji orta mek- depde okady. 1983 — 1989-njy ýyllarda Türkmen döwlet ykdysadyýet we dolandy- ryş institutynda okap, ony ykdysatçy hünäri boýunça tamamlady. 1984 — 1986-njy ýyl- larda harby gullukda boldy. 1989 — 1991- nji ýyllarda SSSR-iň Zähmet we durmuş üpjünçiligi baradaky döw- let komitetiniň Zähmet ylmy-barlag institutynyň Türkmenistandaky bölüminde ykdysatçy bolup işledi. 1991 — 1993-nji ýyllarda Türk­men döwlet ykdysadyýet we dolandyryş institutynyň dolandyryş we halkara ykdysady aragatnaşyklar kafedrasynyň mugallymy bolup işledi. 1993 — 1996-njy ýyllarda şol institutyň dünýä ykdysadyýe- ti we halkara ykdysady gatnaşyklar kafedrasynyň mugallymy, şol bir wagtda, 1991-nji ýylyň sentýabr aýynda institutyň kommersiýa- tehnologiýa fakultetiniň dekanynyň orunbasary wezipesine belle­nildi we 1992-nji ýylyň sentýabr aýynda söwda we halkara ykdysa- dy aragatnaşyklar fakultetiniň dekanynyň orunbasary bolup işledi. 1993 — 1995-nji ýyllarda aspiranturada okady. 1996 — 2002-nji ýyllarda Magtymguly adyndaky Türkmen döwlet uniwersitetiniň dünýä ykdysadyýeti we halkara ykdysady gatnaşyklar kafedrasy- nyň mugallymy, 2002 — 2007-nji ýyllarda şol uniwersitetiň dünýä tejribesini öwreniş kafedrasynyň uly mugallymy bolup işledi. Şol bir wagtda, 2000-nji ýylyň ýanwar aýyndan başlap uniwersitetiň hukuk we halkara gatnaşyklary fakultetiniň dekanynyň orunbasary wezipesine bellendi we şol ýylyň sentýabr aýyndan başlap, 2007- nji ýylyň fewral aýyna çenli hukuk we halkara gatnaşyklar fakulteti- niň dekany wezipesinde işledi.
            2007 — 2012-nji ýyllarda Türkmenistanyň Mejlisiniň Başlygy- nyň orunbasary wezipesinde işledi. 2008-nji ýylyň iýun aýyndan şol bir wagtda Türkmenistanyň Umumymilli «Galkynyş» hereke- tiniň başlygynyň birinji orunbasary, Türkmenistanyň Demokratik partiýasynyň Syýasy Geňeşiniň birinji sekretary, 2013 — 2018-nji ýyllarda Türkmenistanyň Demokratik partiýasynyň başlygy wezi- pelerinde işledi. 2018 — 2021-nji ýyllarda Türkmenistanyň Mejlisi- niň Başlygynyň orunbasary bolup işledi. Türkmenistanyň Mejlisiniň III, IV, V, VI çagyrylyşlarynyň deputaty. 2021 — 2023-nji ýyllarda Türkmenistanyň Milli Geňeşiniň Halk Maslahatynyň Başlygynyň orunbasary bolup işledi. Häzirki wagtda Türkmenistanyň Halk Maslahatynyň Diwanynyň Iş dolandyryjysy wezipesinde işleýär.
            2010-njy ýylda Türkmenistanyň «Watana bolan söýgüsi üçin» medaly, 2011-nji ýylda «Türkmenistanyň Garaşsyzlygynyň 20 ýyl- lygyna» atly ýubileý medaly, 2014-nji ýylda Türkmenistanyň «Mag- tymguly Pyragy» medaly, 2015-nji ýylda Türkmenistanyň «Garaş- syz, Baky Bitarap Türkmenistan» ýubileý medaly, 2016-njy ýylda «Türkmenistanyň Garaşsyzlygynyň 25 ýyllygyna» atly Türkmenis- tanyň ýubileý medaly, 2017-nji ýylda Türkmenistanyň Garaşsyzly- gynyň 26 ýyllygy mynasybetli ýadygärlik nyşany bilen sylaglanyldy.
            Maşgalaly, dört çagasy bar.
            Türkmenistanyň Demokratik partiýasy tarapyndan dalaşgär- lige hödürlenildi.
        </p>";
    
    $district_desc = "<p>Berkararlyk etrabynyň Gurbansoltan eje şaýolunyň S.Türkmenbaşy şaýoly bilen kesişýän çatrygyndan başlap, Gurbansoltan eje şaýolunyň ugry bilen B.Annanow köçesine çenli, şol ýerden B.Annanow köçesiniň ugry bilen A.Nyýazow şaýoluna çenli, A.Nyýazow şaýolunyň ugry bilen A.Garlyýew köçesine çenli, A.Garlyýew köçesiniň ugry bilen Galkynyş köçesine çenli, Galkynyş köçesiniň ugry bilen S.Türkmenbaşy şaýoluna çenli, S.Türkmenbaşy şaýolunyň ugry bilen Gurbansoltan eje şaýoluna çenli araçäkleri öz içine alýar</p>";

@endphp

@section('content')
    <div class="mejlis_deputies_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure_page') }}"/>

                <div class="right_block flex_column">

                    <div class="title_row flex_row">
                        <h3 class="title">@lang('app.mejlis_deputies_page.deputies')</h3>
                        
                        <div class="select_block">
                            <select name="" id="">
                                <option value="">Welaýat</option>
                                <option value="">Welaýat</option>
                            </select>

                            <select name="" id="">
                                <option value="">Etrap</option>
                                <option value="">Etrap</option>
                            </select>
                        </div>
                    </div>

                    <div class="letters_row flex_row">
                       <span class="letter">A</span>
                       <span class="letter">B</span>
                       <span class="letter">Ç</span>
                       <span class="letter">D</span>
                       <span class="letter">E</span>
                       <span class="letter">Ä</span>
                       <span class="letter">F</span>
                       <span class="letter">G</span>
                       <span class="letter">H</span>
                       <span class="letter">I</span>
                       <span class="letter">J</span>
                       <span class="letter">Ž</span>
                       <span class="letter">K</span>
                       <span class="letter">L</span>
                       <span class="letter">M</span>
                       <span class="letter">N</span>
                       <span class="letter">Ň</span>
                       <span class="letter">O</span>
                       <span class="letter">Ö</span>
                       <span class="letter">P</span>
                       <span class="letter">R</span>
                       <span class="letter">S</span>
                       <span class="letter">Ş</span>
                       <span class="letter">T</span>
                       <span class="letter">U</span>
                       <span class="letter">Ü</span>
                       <span class="letter">W</span>
                       <span class="letter">Y</span>
                       <span class="letter">Ý</span>
                       <span class="letter">Z</span>
                    </div>

                    <div class="deputies_block flex_row">

                        <div class="deputy_container flex_column" data-href-value="{{ route('single_deputy_page', 1) }}">
                            <span class="name">Babaýew Kasymguly Gulmyradowiç</span>
                            <x-deputy-popup name="Babaýew Kasymguly Gulmyradowiç" district="1-nji «Garaşsyzlyk» saýlaw okrugy" :description="$deputy_description" />

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">@lang('app.mejlis_deputies_page.election_district'):</span>
                                <span class="value">1-nji «Garaşsyzlyk» saýlaw okrugy</span>
                                <x-election-district-popup name="1-nji «Garaşsyzlyk» saýlaw okrugy" :description="$district_desc"/>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">@lang('app.mejlis_deputies_page.committee'):</span>
                                <span class="value">Adam hukuklaryny we azatlyklaryny goramak baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column" data-href-value="#">
                            <span class="name">Muhamedow Begmurat Rahmangulyýewiç</span>

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">Saýlaw okrugy:</span>
                                <span class="value">2-nji «Bitaraplyk» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Halkara we parlamentara aragatnaşyklar baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column" data-href-value="#">
                            <span class="name">Öwekowa Jenet Ýazberdiýewna</span>

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">Saýlaw okrugy:</span>
                                <span class="value">3-nji «Azatlyk» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Kada-kanunçylyk baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column" data-href-value="#">
                            <span class="name">Owganow Saparmyrat Esenowiç</span>

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">Saýlaw okrugy:</span>
                                <span class="value">4-nji «Berkararlyk» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Ykdysady meseleler baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column" data-href-value="#">
                            <span class="name">Gulmanowa Dünýägözel Akmuhammedowna</span>

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">Saýlaw okrugy:</span>
                                <span class="value">5-nji «Parahatçylyk» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Kada-kanunçylyk baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column" data-href-value="#">
                            <span class="name">Babanyýazow Çarygeldy Gurbangeldiýewiç</span>

                            <div class="key_value_wrapper flex_column">
                                <span class="key election_district">Saýlaw okrugy:</span>
                                <span class="value">6-njy «Köpetdag» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Daşky gurşawy goramak, tebigatdan peýdalanmak we
                                    agrosenagat toplumy baradaky komitet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let href_value = ''

        $('.deputy_container, .deputy_container > .name, .deputy_container .election_district').on('click', (event) => {
            if($(event.target).hasClass('name')){   //if the deputy_name is clicked
                $(event.target).siblings('.deputy_popup_container').addClass('active')

            } else if($(event.target).hasClass('election_district')){       //if the election_district is clicked
                $(event.target).siblings('.district_popup_container').addClass('active')

            } else if($(event.target).parents().hasClass('deputy_popup_container') || $(event.target).parents().hasClass('district_popup_container')){

            } else {
                href_value = $(event.target).data('href-value')  //if the block itself is the event target
                ? $(event.target).data('href-value') 
                : $(event.target).parent().data('href-value') ?? $(event.target).parent().parent().data('href-value') //else if first child or second child is the event target
                window.location.assign(href_value)
            }
            
        })

        $('.deputy_popup_container .remove_button, .district_popup_container .remove_button').on('click', (event) => {
            $(event.target).parent().parent().removeClass('active')
        })
        
    </script>
@endsection