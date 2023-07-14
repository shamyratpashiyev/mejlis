@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_deputy_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Mejlis komitetleri ', 'url' => '#'],
                    ['name'=>'Mejlis deputatlary ','url' => '#'], 
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
    <div class="single_deputy_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Düzümi we gurluşygy / Mejlis deputatlary
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Düzümi we gurluşygy"/>

                <div class="right_block flex_column">

                    <h3 class="name">Babaýew Kasymguly Gulmyradowiç</h3>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Wezipesi:</span>
                        <span class="value">Türkmenistanyň Halk Maslahatynyň Diwanynyň Iş dolandyryjysy</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Doglan ýyly:</span>
                        <span class="value">1966 ýyl</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">E-mail adresi:</span>
                        <a href="mailto:info@mejlis.gov.tm" class="value link">info@mejlis.gov.tm</a>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Saýlaw okrugy:</span>
                        <span class="value link" id="election_district_name">1-nji «Garaşsyzlyk» saýlaw okrugy</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Terjimehaly:</span>
                        <span class="value link" id="deputy_description">giňişleýin</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">Komiteti:</span>
                        <span class="value">Adam hukuklaryny we azatlyklaryny goramakbaradaky komiteti</span>
                    </div>

                </div>

                <x-deputy-popup name="Babaýew Kasymguly Gulmyradowiç" district="1-nji «Garaşsyzlyk» saýlaw okrugy" :description="$deputy_description" />
                <x-election-district-popup name="1-nji «Garaşsyzlyk» saýlaw okrugy" :description="$district_desc"/>
            </div>
        </div>
    </div>
    <script>
        $('#election_district_name').on('click', (event) => {
            $('.district_popup_container').addClass('active')
        })

        $('#deputy_description').on('click', (event) => {
            $('.deputy_popup_container').addClass('active')
            console.log('clicked')
        })

        $('.deputy_popup_container .remove_button, .district_popup_container .remove_button').on('click', (event) => {
            $(event.target).parent().parent().removeClass('active')
        })
    </script>
@endsection