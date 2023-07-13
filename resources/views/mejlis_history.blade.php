@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_history.css') }}">
@endpush

@section('content')
    <div class="mejlis_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Mejlis hakynda / Mejlisiň taryhy
            </div>

            <div class="page_content_block flex_row">

                @include('components.navbar')

                <div class="right_side">
                    <h3 class="block_title">Mejlisiň taryhy</h3>

                    <div class="text_block">
                        <h4 class="text_title">Türkmenistanyň Mejlisi hakynda Maglumat</h4>
                        <p>&emsp;&emsp;&ensp;Türkmenistanda parlamentiň we döwlet-institusional gurluşyň uzak bolmadyk taryhyna ser salanyňda, ýurdumyzda parlamentarizmiň yzygiderli ösýändigine göz ýetirmek bolýar.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Milli parlamentiň kemala gelmegi Türkmenistanyň 1991-nji ýylda döwlet Garaşsyzlygyna eýe bolan döwründen başlandy. Bu Milli parlamentiň däpleriniň peýda bolýan, dünýä parlamentarizminiň tejribesiniň öwrenilýän, bir hukuk giňişliginden başga bir hukuk giňişligine geçilýän döwür boldy.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmenistan döwlet Garaşsyzlygyna eýe bolmazyndan ozal respublikada kanun çykaryjylyk işi Türkmenistanyň Ýokary Soweti tarapyndan amala aşyrylýardy. Ýokary Sowetiň soňky çagyrylyşyny geçiş döwri hökmünde häsiýetlendirmek bolar. Onuň ygtyýarlyklary 1995-nji ýylyň 1-nji ýanwaryna, ýagny Mejlisiň birinji çagyrylyşynyň saýlawlaryna çenli uzaldyldy.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmenistanyň Ýokary Sowetiniň nobatdan daşary onunjy sessiýasynda (1991-nji ýylyň 27-nji oktýabrynda) «Türkmenistanyň Garaşsyzlygy we döwlet gurluşynyň esaslary hakynda» Konstitusion kanun kabul edildi. Şol kanunda emele gelen täze şertleri nazara almak bilen, döwlet edaralarynyň ähli ulgamyny, hereket edýän kanunçylygy özgerdip gurmagyň konsepsiýasy beýan edildi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmenistanyň 1992-nji ýylyň 18-nji maýynda kabul edilen täze Konstitusiýasy syýasy ulgamy özgertmäge kuwwatly itergi beren möhüm waka boldy. Türkmenistanyň Konstitusiýasynyň kabul edilmegi türkmen halkynyň milli ruhunyň galkynan güni hökmünde taryha girdi. Iňňän uly syýasy ähmiýeti bolan bu resminama döwlet baradaky tejribäni we giň halk köpçüliginiň pikirleri bilen baýlaşan hil taýdan täze maksatlary özünde jemledi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Garaşsyzlygyň ilkinji ýyllarynda döwletimiziň hukuk binýady ýokdy. Şoňa görä-de, onuň işiniň esasy maksady kanun çykaryjylyk işi boldy. Türkmenistanyň Mejlisi ýurduň ýokary kanun çykaryjy edarasy hökmünde döwlet özygtyýarlylygyny, raýat ylalaşygyny, durmuş taýdan durnuklylygy berkitmäge, jemgyýetde demokratik, durmuş-ykdysady özgertmeleri çuňlaşdyrmaga ýardam edýän kanunlary işläp taýýarlamaga we kabul etmäge uly üns berdi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Şonuň netijesinde milli Parlament Garaşsyz Türkmenistanyň kanunçylyk-hukuk binýadyny ep-esli giňeltdi, ýurdumyzy ösdürmegiň esasy ugurlaryny kesgitledi, halkara resminamalarynyň we onuň ýöriteleşdirilen edaralarynyň Konwensiýalarynyň onlarçasyny tassyklady.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmenistanyň Konstitusiýasy Garaşsyz döwletiň milli aýratynlygyna we özboluşlylygyna has doly laýyk gelýän täze görnüşdäki häkimiýet hem-de dolandyryş edaralarynyň we olaryň öňünde durýan düýpli uly wezipeleri çözmäge ukyply ulgamyny berkitdi. Ýurdy dolandyrmagyň prezident görnüşi ýola goýuldy. Täze Ministrler Kabineti, ýerlerde bolsa häkimlikler döredildi. Ýerli öz-özüňi dolandyryşyň täzelenen edaralary bolan Geňeşler hereket edip başlady. Dünýä tejribesinde henize çenli bolmadyk hem-de Konstitusiýa arkaly tassyklanylan halk häkimiýetiniň ýokary wekilçilikli edarasy bolan Halk Maslahaty ýurdy dolandyrmagyň hakyky demokratik instituty boldy. Soňra döwlet dolandyryşyny kämilleşdirmegiň ýolunda Halk Maslahatynyň hukuk ýagdaýy birnäçe gezek özgerdildi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Ýurdumyzyň parlamentiniň hukuk ýagdaýy düýpli üýtgedildi. Ol Mejlis diýlip atlandyryldy we oňa Konstitusiýany we kanunlary kabul etmek hem-de üýtgetmek, Prezidentiň, Mejlisiň, halk wekilleriniň saýlawlaryny bellemek, Ministrler Kabinetiniň maksatnamasyny makullamak, Türkmenistanyň Döwlet býujetini we onuň ýerine ýetirilişi baradaky hasabaty tassyklamak we başga-da döwlet ähmiýetli ençeme meseleler boýunça aýratyn ygtyýarlyklar berildi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Konstitusiýa laýyklykda, Mejlis (Parlament) Türkmenistanyň hemişelik hereket edýän kanun çykaryjy edarasyna öwrüldi. Ol saýlawçylarynyň sany, takmynan deňeçer bolan okruglar boýunça saýlanylan deputatlaryň 50-sinden ybaratdy.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmenistanda taryhy nukdaýnazardan gysga döwrüň içinde jemgyýetiň we döwletiň durmuşynyň ähli çygyrlaryndaky gatnaşyklary düzgünleşdirýän kanunlar kabul edildi. Şonuň ýaly-da dünýäniň kanunçylyk işinde bar bolan, esasy hukuk düşünjelerini we pudaklaryny özünde jemleýän pugta kanunçylyk binýady döredildi. Dünýäniň syýasy, ykdysady we hukuk giňişligine biziň ýurdumyzyň işjeň goşulyşmagy türkmen hukuk ylmynda bank, salgyt, gümrük, ekologiýa we kanunçylygyň beýleki görnüşleri ýaly täze ugurlaryň ýüze çykmagyny şertlendirdi. Şol bir wagtda halkara işlerinde Türkmenistanyň işjeň ugry, diplomatik işde onuň deňi-taýy bolmadyk göreldesi halkara hukuk meselelerine garamakda we hukuk taýdan düşünmekde, şeýle hem halkara hukuk kadalarynyň milli kanunçylyga ornaşdyrylmagynda düýpgöter täze çemeleşmeleri kemala getirmäge mümkinçilik berdi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Mejlisiň işi Türkmenistanyň Konstitusiýasyna we «Türkmenistanyň Mejlisi hakynda» Kanuna laýyklykda amala aşyrylyp başlandy. Ol meseleleriň erkin ara alnyp maslahatlaşylmagyna we bilelikde çözülmegine, Mejlisiň döredýän düzümleriniň hem-de saýlanylan wezipeli adamlarynyň jogapkärçiligine, hasabatlylygyna, aýanlyga, jemgyýetçilik pikiriniň hemişe hasaba alynmagyna esaslanýar.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Türkmen parlamentiniň birinji çagyrylyşynyň düzümine 50 deputat saýlanyldy. Deputatlaryň 9-sy (18 göterimi) aýal-gyzlardy.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Mejlisiň birinji çagyrylyşynda bäş sany komitet, ýagny Jemlenen kanunçylyk baradaky, Hukuk meseleleri baradaky, Ylym, bilim, we medeniýet baradaky, Ykdysadyýet we durmuş syýasaty baradaky, Halkara we parlamentara aragatnaşyklar baradaky komitetler hereket etdi.</p>
                        <br/>
                        <p>&emsp;&emsp;&ensp;Parlamentiň ikinji çagyrylyşynyň deputatlarynyň saýlawlary 1999-njy ýylyň dekabrynda, üçünji çagyrylyşynyň saýlawlary 2004-nji ýylyň dekabrynda, dördünji çagyrylyşynyň saýlawlary 2008-nji ýylyň dekabrynda, bäşinji çagyrylyşynyň saýlawlary 2013-nji ýylyň dekabrynda, altynjy çagyrylyşynyň saýlawlary möhletinden öň, 2018-nji ýylyň mart aýynda geçirildi. Mejlisiň dördünji çagyrylyşyndan başlap deputatlaryň sany 125 adamdan ybarat bolup, olaryň ygtyýarlyk möhleti 5 ýyla deň boldy. Parlamentde häzirki wagtda ýurdumyzda hereket edýän üç sany syýasy partiýa ‒ Türkmenistanyň Demokratik partiýasy, Türkmenistanyň Agrar partiýasy we Türkmenistanyň Senagatçylar hem-de telekeçiler partiýasy şeýle hem raýatlaryň toparlary tarapyndan hödürlenilen we saýlanylan deputatlar wekilçilik edýärler.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection