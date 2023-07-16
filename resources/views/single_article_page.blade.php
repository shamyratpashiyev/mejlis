@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_article_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Täzelikler', 'url' => '#'],
                    ['name'=>'Çykyşlar we makalalar','url' => '#'], 
                    ['name'=>'Türkmenistanyň mejlisinde alnyp barylýan işler', 'url' => '#'],
                    ['name'=>'Galereýa', 'url' => '#'],
                ]
@endphp

@section('content')
    <div class="single_article_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Media / Habarlar
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Habarlar"/>

                <div class="article_content_block flex_column">

                    <div class="date_row flex_row">
                        <svg class="icon" width="117" height="21" viewBox="0 0 117 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" y1="10" x2="44" y2="10" stroke="#EEB816"/>
                            <mask id="path-2-inside-1_113_1071" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60.99 4.48997L58.5 2L56.01 4.48997H52.4892V8.0108L50 10.5L52.4892 12.9892V16.5108H56.0108L58.5 19L60.9892 16.5108H64.51V12.99L67 10.5L64.51 8.01001V4.48997H60.99Z"/>
                            </mask>
                            <path d="M58.5 2L59.5607 0.93934L58.5 -0.12132L57.4393 0.93934L58.5 2ZM60.99 4.48997L59.9293 5.55064L60.3687 5.98997H60.99V4.48997ZM56.01 4.48997V5.98997H56.6313L57.0707 5.55064L56.01 4.48997ZM52.4892 4.48997V2.98997H50.9892V4.48997H52.4892ZM52.4892 8.0108L53.5499 9.07146L53.9892 8.63212V8.0108H52.4892ZM50 10.5L48.9393 9.43934L47.8787 10.5L48.9393 11.5607L50 10.5ZM52.4892 12.9892H53.9892V12.3679L53.5499 11.9285L52.4892 12.9892ZM52.4892 16.5108H50.9892V18.0108H52.4892V16.5108ZM56.0108 16.5108L57.0715 15.4501L56.6321 15.0108H56.0108V16.5108ZM58.5 19L57.4393 20.0607L58.5 21.1213L59.5607 20.0607L58.5 19ZM60.9892 16.5108V15.0108H60.3679L59.9285 15.4501L60.9892 16.5108ZM64.51 16.5108V18.0108H66.01V16.5108H64.51ZM64.51 12.99L63.4494 11.9293L63.01 12.3687V12.99H64.51ZM67 10.5L68.0607 11.5607L69.1213 10.5L68.0607 9.43934L67 10.5ZM64.51 8.01001H63.01V8.63133L63.4494 9.07067L64.51 8.01001ZM64.51 4.48997H66.01V2.98997H64.51V4.48997ZM57.4393 3.06066L59.9293 5.55064L62.0506 3.42931L59.5607 0.93934L57.4393 3.06066ZM57.0707 5.55064L59.5607 3.06066L57.4393 0.93934L54.9494 3.42931L57.0707 5.55064ZM52.4892 5.98997H56.01V2.98997H52.4892V5.98997ZM53.9892 8.0108V4.48997H50.9892V8.0108H53.9892ZM51.0607 11.5607L53.5499 9.07146L51.4285 6.95014L48.9393 9.43934L51.0607 11.5607ZM53.5499 11.9285L51.0607 9.43934L48.9393 11.5607L51.4285 14.0499L53.5499 11.9285ZM53.9892 16.5108V12.9892H50.9892V16.5108H53.9892ZM56.0108 15.0108H52.4892V18.0108H56.0108V15.0108ZM59.5607 17.9393L57.0715 15.4501L54.9501 17.5715L57.4393 20.0607L59.5607 17.9393ZM59.9285 15.4501L57.4393 17.9393L59.5607 20.0607L62.0499 17.5715L59.9285 15.4501ZM64.51 15.0108H60.9892V18.0108H64.51V15.0108ZM63.01 12.99V16.5108H66.01V12.99H63.01ZM65.9393 9.43934L63.4494 11.9293L65.5707 14.0506L68.0607 11.5607L65.9393 9.43934ZM63.4494 9.07067L65.9393 11.5607L68.0607 9.43934L65.5707 6.94935L63.4494 9.07067ZM63.01 4.48997V8.01001H66.01V4.48997H63.01ZM60.99 5.98997H64.51V2.98997H60.99V5.98997Z" fill="#EEB816" mask="url(#path-2-inside-1_113_1071)"/>
                            <line x1="73" y1="10" x2="113" y2="10" stroke="#EEB816"/>
                        </svg>
                        <span class="date">27.05.2023</span>
                    </div>

                    <div class="text_block">
                        
                        <h3 class="text_title">DEMOKRATIÝANYŇ KÄMIL NUSGASY</h3>

                        <p> 
                            <em>
                                &emsp;&emsp;Ýaňy-ýakynda Türkmenistanyň Maslahatlar merkeziniň binasynda türkmen halkynyň Milli Lideri, Türkmenistanyň Halk Maslahatynyň Başlygy Gurbanguly Berdimuhamedowyň başlyklyk etmeginde Halk Maslahatynyň mejlisi geçirildi. Mejlisiň dowamynda ýokary wekilçilikli edaranyň işini kadaly alyp barmak üçin onuň Prezidiumy döredilip, düzümi tassyklandy. Şeýle hem ýurdumyzy milli demokratiýanyň aýdyň ýoly bilen öňe alyp gitmek, döwlet durmuşynyň ykdysady ösüşini mundan beýläk hem pugtalandyrmak, jemgyýetçilik gatnaşyklaryny berkitmek bilen bagly öňde durýan wezipeler ara alnyp maslahatlaşyldy. Oňa welaýatymyzdan gatnaşan wekilleriň käbirleriniň ýürek buýsançlaryny okyjylara ýetirýäris.
                                <br><br>
                            </em>
                        </p>

                        <p>
                            <strong>
                                &emsp;&emsp;Amanmyrat KAKYŞOW,<br><br>
                                &emsp;&emsp;Daşoguz şäher häkimliginiň işgärler we ýerli öz-özüňi dolandyryş edaralary bilen işlemek boýunça bölüminiň müdiri, welaýat halk maslahatynyň başlygy:
                                <br><br>
                            </strong>
                        </p>
                        
                        <p>
                            &emsp;&emsp;— Ýurdumyzyň durmuşynda bolup geçýän taryhy wakalaryň ählisi şu günümizi we bagtyýar geljegimizi beýgeltjek tutumly işlere ýugrulandyr. Onuň şeýledigini ýaňy-ýakynda Türkmenistanyň Halk Maslahatynyň Başlygy Gahryman Arkadagymyzyň başlyklyk etmeginde gözel paýtagtymyz Aşgabatda geçirilen ýurdumyzyň ýokary wekilçilikli edarasynyň taryhy mejlisiniň mysalyndan hem aýdyň görmek bolýar.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Mejlisiň gün tertibine laýyklykda, Halk Maslahatynyň Prezidiumy döredildi we onuň düzümi tassyklandy. Gahryman Arkadagymyzyň mejlisde taryhy çykyş edip, döwlet häkimiýetiniň ýerli wekilçilikli edaralarynyň, şeýle hem ýerli öz-özüňi dolandyryş edaralarynyň öňünde durýan wezipeler, olaryň ilat arasynda geçirmeli işleri we oňa laýyklykda teklipleri taýýarlamak boýunça ýerine ýetirilmeli çäreleri kesgitläp bermeginiň, şeýle hem Geňeşleriň işiniň netijeliligini ýokarlandyrmak maksady bilen, degişli edaralara birnäçe wezipeleri tabşyrmagynyň halkymyzyň, her bir raýatyň bähbidine we bagtyýar geljegine oňaýly mümkinçilikleri döretmäge ýardam etjekdigine buýsanjymyz artdy.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Gahryman Arkadagymyz: «Halk Maslahaty häzirki döwürde döwlet bilen halkyň jebisligini, jemgyýetde maksatlaryň birdigini, ösüş ýollaryna bolan garaýyşlarynyň bitewüligini ýüze çykarýan esasy syýasy-jemgyýetçilik güýç hökmünde öz ornuny pugtalandyrýar» diýip belledi. Taryhy mejlisiň öňe çykaran wezipeleri onuň doly manysynda durmuş hakykatyna eýedigini ýene bir ýola subut etdi. Şeýle asylly maksatly işleriň başynda duran Gahryman Arkadagymyza, hormatly Prezidentimiz Arkadagly Serdarymyza tüýs ýürekden çykýan hoşallyklarymyz çäksizdir.
                            <br><br>
                        </p>
                        <p>
                            <strong>
                                &emsp;&emsp;Ýeňiş HAÝYTJANOW,<br><br>
                                &emsp;&emsp;Görogly etrabyndaky 38-nji orta mekdebiň müdiriniň<br><br>
                                &emsp;&emsp;wezipesini ýerine ýetiriji, Türkmenistanyň Mejlisiniň deputaty:<br><br>
                            </strong>
                        </p>

                        <p>
                           &emsp;&emsp; — Türkmenistanyň Halk Maslahatynyň Başlygy Gahryman Arkadagymyzyň başlyklyk etmeginde geçen Halk Maslahatynyň mejlisinde aýdylan teklipleriň we öňde goýlan wezipeleriň ählisi jemgyýetde demokratik özgertmeleriň amala aşyrylmagyna, halk häkimiýetliliginiň pugtalandyrylmagyna, ýurdumyzyň durmuş-ykdysady ösüşiniň ilerledilmegine, uzak ýyllary öz içine alýan Milli maksatnamamyzyň tapgyrlaýyn durmuşa geçirilmegine degişli tagallalaryň rowaçlanmagyna gönükdirilendir. Gahryman Arkadagymyzyň taryhy çykyşynda ýokary wekilçilikli edaranyň we onuň düzümleriniň işiniň netijeliligini ýokarlandyrmak bilen bagly meseleleriň üstünde aýratyn durup geçmegi, bu ugurda maslahatlary, birnäçe tabşyryklary bermegi, derwaýys wezipeleri öňde goýmagy täze taryhy döwrüň bedew batly ösüşinde maksatlaryň birligini emele getirmekde esasy başlangyç boldy.
                           <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Gahryman Arkadagymyz kanunçykaryjylyk işini ösen döwrüň talaplaryna laýyk has-da kämilleşdirmek, halkara hukugyň umumy ykrar edilen kadalaryny milli kanunçylygymyza ornaşdyrmak bilen bagly wezipeleriň üstünlikli ýerine ýetirilmegi boýunça hem meselelere ünsi çekdi. Şunda hil taýdan täze derejä we işjeň häsiýete eýe bolan parlament diplomatiýasynyň parlamentara gatnaşyklaryň ösdürilmegindäki ähmiýetini belläp geçdi. Bu işleriň ýurdumyzyň kanunçylyk binýadynyň kämilleşdirilmegine, ykdysady hem syýasy ösüşiň pugtalandyrylmagynda uly ähmiýete eýe bolup durýandygy, şoňa laýyklykda, milli parlamentiň deputatlarynyň ýurdumyzy dürli ugurlar babatda ösdürmek boýunça milli kanunçylygy kämilleşdirmek, halkara tejribeden ugur alyp, kanunçylyk namalaryny yzygiderli döwrebap ýagdaýa getirmek barada parasatly maslahatlaryny berdi.
                            <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Gahryman Arkadagymyzyň biz — milli parlamentiň deputatlaryna bildirýän uly ynamy bizi taryhy mejlisiň çözgütlerinden ýokary netijeleri çykaryp, bilimimizi, başarnygymyzy gaýgyrman zähmet çekmäge ruhlandyrýar.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection