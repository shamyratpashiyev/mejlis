@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_deputies_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Mejlis komitetleri ', 'url' => '#'],
                    ['name'=>'Mejlis deputatlary ','url' => '#'], 
                ]
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

                    <div class="title_row flex_row">
                        <h3 class="title">Deputatlar</h3>
                        
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

                        <div class="deputy_container flex_column">
                            <a href="{{ route('single_deputy_page',1) }}" class="name">Babaýew Kasymguly Gulmyradowiç</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
                                <span class="value">1-nji «Garaşsyzlyk» saýlaw okrugy</span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">E-mail:</span>
                                <span class="value">info@mejlis.gov.tm </span>
                            </div>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Komitet:</span>
                                <span class="value">Adam hukuklaryny we azatlyklaryny goramak baradaky komitet</span>
                            </div>
                        </div>

                        <div class="deputy_container flex_column">
                            <a href="#" class="name">Muhamedow Begmurat Rahmangulyýewiç</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
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

                        <div class="deputy_container flex_column">
                            <a href="#" class="name">Öwekowa Jenet Ýazberdiýewna</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
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

                        <div class="deputy_container flex_column">
                            <a href="#" class="name">Owganow Saparmyrat Esenowiç</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
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

                        <div class="deputy_container flex_column">
                            <a href="#" class="name">Gulmanowa Dünýägözel Akmuhammedowna</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
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

                        <div class="deputy_container flex_column">
                            <a href="#" class="name">Babanyýazow Çarygeldy Gurbangeldiýewiç</a>

                            <div class="key_value_wrapper flex_column">
                                <span class="key">Saýlaw okrugy:</span>
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
@endsection