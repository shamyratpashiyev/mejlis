@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/constitutional_law_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Законопроекты на обсуждение', 'url' => '#'],
                    ['name'=>'Kodeksler','url' => '#'], 
                    ['name'=>'Kanunlar', 'url' => '#'],
                    ['name'=>'Mejlisiň kararlary', 'url' => '#'],
                    ['name'=>'Konstitusion kanuny', 'url' => '#'],
];
    
@endphp

@section('content')
    <div class="constitutional_law_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Kanunçylyk / Kodeksler
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Düzümi we gurluşygy"/>

                <div class="right_side flex_column">
                    <h3 class="block_title">Konstitusion kanuny</h3>

                    <div class="text_block">

                        <div class="title_block flex_column">
                            <h4 class="text_title">TÜRKMENISTANYŇ KONSTITUSION KANUNY</h4>
                            <h5 class="text_subtitle">Türkmenistanyň Konstitusiýasyny rejelenen görnüşde tassyklamak hakynda</h5>
                            <span>(Türkmenistanyň Mejlisiniň Maglumatlary, 2016 ý., № 3, 131-nji madda)</span>
                        </div>
                        
                        <p>
                            &emsp;&emsp;Berkarar döwletimiziň bagtyýarlyk döwründe Türkmenistanyň Prezidentiniň ýurdumyzyň her bir raýatynyň, ähli halkynyň jana-jan bähbitlerine laýyk gelýän parasatly syýasatyny durmuşa geçirmek ugrunda çekilýän zähmet eziz Diýarymyzy ajaýyp zähmet ýeňişlerine, belent sepgitlere ýetirdi. <br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Mähriban Watanymyzyň ykdysadyýetinde häzirkizaman bazar gatnaşyklaryna geçilmeginiň we raýat jemgyýetiniň gymmatlyklarynyň durmuşa ornaşdyrylmagynyň, Türkmenistany ykdysady, syýasy we medeni-durmuş taýdan ösdürmek boýunça gazanylýan üstünlikleriň gözbaşynda ýurdumyzda alnyp barylýan syýasatyň, amala aşyrylýan belent işleriň durýanlygyny duýmak buýsançlydyr.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Watana, halka hyzmat etmegiň belent nusgasyny görkezip, eziz Diýarymyzyň aýdyň geljegi we halkymyzyň eşretli durmuşy ugrunda alnyp barylýan, her bir raýatyň asuda, abadan we bagtyýar durmuşda ýaşamagyny üpjün edýän parasatly syýasaty durmuşa geçirmäge goşant goşmak, Watan üçin, halk üçin zähmet çekmegiň we döretmegiň iň gowy nusgalygyny gündelik işiň bilen subut etmek mukaddes işdir.<br><br>
                        </p>
                        <p>
                            &emsp;&emsp;Türkmenistanyň Prezidentiniň ýurdumyzyň ösüşiniň täze tapgyrynda yglan eden Garaşsyz, hemişelik Bitarap Watanymyzyň jemgyýetçilik we döwlet-syýasy gurluşyny kämilleşdirmek, bazar ykdysadyýetine doly geçmek baradaky belent özgertmeleriniň konstitusion hukuk esaslaryny üpjün etmek, ýurdumyzda amala aşyrylýan durmuş, ykdysady özgertmeleriniň depgininiň ýokarlanmagyna we geriminiň giňelmegine ýardam etmek, Türkmenistanyň döwlet we jemgyýetçilik durmuşynda demokratiýany mundan beýläk hem ösdürmek, döwlet häkimiýet edaralarynyň işini has-da kämilleşdirmek maksady bilen, Türkmenistanyň Mejlisi tarapyndan Türkmenistanyň Konstitusiýasyna üýtgetmeler we goşmaçalar girizip, ony rejelenen görnüşde tassyklamak boýunça Türkmenistanyň döwlet häkimiýet edaralaryndan, jemgyýetçilik birleşiklerinden, raýatlardan gelip gowşan teklipleriň esasynda umumylaşdyrylyp taýýarlanan we Türkmenistanyň Konstitusiýasyny kämilleşdirmek boýunça Kontitusion toparynda ara alnyp maslahatlaşylyp, Türkmenistanyň Ýaşulularynyň maslahatynyň garamagyna hödürlenen teklipleri nazara alyp, Türkmenistanyň Konstitusiýasynyň 63-nji maddasyna laýyklykda:<br><br>
                        </p>
                        <p>
                        &emsp;&emsp; <strong>1-nji madda.</strong> Türkmenistanyň Konstitusiýasyny kämilleşdirmek boýunça Konstitusion toparynyň Türkmenistanyň Konstitusiýasyna üýtgetmeler we goşmaçalar girizip, ony rejelenen görnüşde tassyklamak hakynda tekliplerini doly makullamaly. <br><br>
                        &emsp;&emsp;<strong>2-nji madda.</strong> Türkmenistanyň Konstitusiýasyna üýtgetmeler we goşmaçalar girizip, ony rejelenen görnüşde tassyklamaly (goşulýar).<br><br>
                        &emsp;&emsp;<strong>3-nji madda.</strong> Şu Konstitusion kanun kabul edilen pursadyndan güýje girýär.<br><br>
                        &emsp;&emsp; <strong>Türkmenistanyň Prezidenti</strong><br><br>
                        &emsp;&emsp; <strong>Gurbanguly Berdimuhamedow</strong><br><br>
                        &emsp;&emsp;Aşgabat şäheri.<br><br>
                        &emsp;&emsp;2016-njy ýylyň 14-nji sentýabry.<br><br>
                        &emsp;&emsp;№ 448-V.<br><br>
                        &emsp;&emsp;TÜRKMENISTANYŇ KONSTITUSIÝASY<br><br>
                        &emsp;&emsp;(rejelenen görnüşi)<br><br>
                        &emsp;&emsp;(09.10.2017 ý. № 617-V, 25.09.2020 ý.№ 297-VI Türkmenistanyň Konstitusionkanunlary esasynda girizilen goşmaçalar we üýtgetmeler bilen)<br><br>
                        &emsp;&emsp;Biz, Türkmenistanyň halky,<br><br>
                        &emsp;&emsp;öz ykbalymyzy kesgitlemäge bolan mizemez hukugymyza esaslanyp,<br><br>
                        &emsp;&emsp;Watanymyzyň häzirki we geljekki ykbaly üçin jogapkärligimizden ugur alyp,<br><br>
                        &emsp;&emsp;ata-babalarymyzyň agzybir, parahat we oňşukly ýaşamagy ündän wesýetlerine wepalylygymyzy we umumadamzat gymmatlyklaryna ygrarlylygymyzy beýan edip,<br><br>
                        &emsp;&emsp;milli gymmatlyklarymyzy we bähbitlerimizi gorap saklamagy, Türkmenistanyň garaşsyzlygyny, özygtyýarlylygyny, dünýä bileleşigi tarapyndan ykrar edilen hemişelik bitaraplyk hukuk ýagdaýyny pugtalandyrmagy maksat edinip,<br><br>
                        &emsp;&emsp;adamyň we raýatyň hukuklaryny we azatlyklaryny kepillendirip,<br><br>
                        &emsp;&emsp;jemgyýetde asudalygy we agzybirligi üpjün etmäge, halk häkimiýetiniň hem-de demokratik, hukuk, dünýewi döwletiň esaslaryny berkarar etmäge çalşyp,<br><br>
                        &emsp;&emsp;Türkmenistanyň Esasy Kanunyny – şu Konstitusiýany kabul edýäris.<br><br>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection