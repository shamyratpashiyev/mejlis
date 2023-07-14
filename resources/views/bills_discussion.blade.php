@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bills_discussion_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>'Законопроекты на обсуждение', 'url' => '#'],
                    ['name'=>'Kodeksler','url' => '#'], 
                    ['name'=>'Kanunlar', 'url' => '#'],
                    ['name'=>'Mejlisiň kararlary', 'url' => '#'],
                    ['name'=>'Konstitusion kanuny', 'url' => '#'],
                ]
@endphp

@section('content')

    <div class="bills_discussion_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                <span>Baş sahypa</span> / Mejlis hakynda / Законопроекты на обсуждение
            </div>

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="Mejlis hakynda" />

                <div class="right_side flex_column">
                    <h3 class="block_title">Законопроекты на обсуждении</h3>

                    <div class="select_row flex_row">
                        <select name="" id="">
                            <option value="">Hukuk resminamasynyň ady</option>
                            <option value="">Hukuk resminamasynyň ady</option>
                        </select>

                        <select name="" id="">
                            <option value="">Aý saýlaň</option>
                            <option value="">Aý saýlaň</option>
                        </select>

                        <select name="" id="">
                            <option value="">Ýyl saýlaň</option>
                            <option value="">Ýyl saýlaň</option>
                        </select>
                    </div>

                    <div class="table_container flex_column">

                        <div class="header_row flex_row">
                            <span>Hukuk resminamasynyň ady</span>
                            <span>Maslahatlaşmagyň senesi</span>
                            <span>Maslahatlaşmagyň gutarýan senesi</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>2022-nji ýyly «Halkyň Arkadagly zamanasy» diýip yglan etmek hakynda</span>
                            <span>20.12.2021</span>
                            <span>27.12.2021</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>Türkmenistanyň Prezidenti, Türkmenistanyň Milli Geňeşiniň Halk Maslahatynyň Başlygy, Türkmenistanyň Ýaragly Güýçleriniň Belent Serkerdebaşysy Gurbanguly Mälikgulyýewiç Berdimuhamedowy „Garaşsyz Türkmenistanyň Watan goragçysy” atly Türkmenistanyň ýubileý medaly bilen sylaglamak hakynda</span>
                            <span>20.09.2021</span>
                            <span>24.09.2021</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>Türkmenistanyň Prezidenti, Türkmenistanyň Milli Geňeşiniň Halk Maslahatynyň Başlygy, Türkmenistanyň Ýaragly Güýçleriniň Belent Serkerdebaşysy Gurbanguly Mälikgulyýewiç Berdimuhamedowy Türkmenistanyň „Türkmen edermen” medaly bilen sylaglamak hakynda</span>
                            <span>20.09.2021</span>
                            <span>24.09.2021</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>Türkmenistanyň Prezidenti, Türkmenistanyň Milli Geňeşiniň Halk Maslahatynyň Başlygy Hormatly Gurbanguly Mälikgulyýewiç Berdimuhamedowy «Türkmenistanyň Garaşsyzlygynyň 30 ýyllygyna» atly Türkmenistanyň ýubileý medaly we ýadygärlik nyşany – Altyn şaý milli manadymyz bilen sylaglamak hakynda</span>
                            <span>20.09.2021</span>
                            <span>24.09.2021</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>«Garaşsyz Türkmenistanyň Watan goragçysy» atly Türkmenistanyň ýubileý medalyny döretmek hakynda</span>
                            <span>01.06.2021</span>
                            <span>05.06.2021</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>Türkmenistanyň Administratiw iş ýörediş kodeksi</span>
                            <span>20.10.2020</span>
                            <span>24.10.2020</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>TÜRKMENISTANYŇ SUW KODEKSI</span>
                            <span>10.10.2016</span>
                            <span>15.10.2016</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>TÜRKMENISTANYŇ RAÝAT IŞ ÝÖREDIŞ KODEKSI</span>
                            <span>12.08.2015</span>
                            <span>18.08.2015</span>
                        </div>

                        <div class="table_row flex_row">
                            <span>Türkmenistanyň Býujet kodeksi</span>
                            <span>01.03.2014</span>
                            <span>01.03.2014</span>
                        </div>


                        <div class="pagination_row flex_row">
                            
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <a href="#">
                                        <path d="M8.3 12.8602L14.3 18.8602C14.5 19.0602 14.7 19.1602 15 19.1602C15.3 19.1602 15.5 19.0602 15.7 18.8602C16.1 18.4602 16.1 17.8602 15.7 17.4602L10.4 12.1602L15.7 6.86016C16.1 6.46016 16.1 5.86016 15.7 5.46016C15.3 5.06016 14.7 5.06016 14.3 5.46016L8.3 11.4602C7.9 11.8602 7.9 12.4602 8.3 12.8602Z" fill="black"/>
                                    </a>
                                </svg>

                            <a href="#" class="item">1</a>
                            <a href="#" class="item">2</a>
                            <a href="#" class="item">3</a>
                            <span class="item">...</span>
                            <a href="#" class="item">10</a>
                            <a href="#" class="item">11</a>

                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <a href="#">
                                    <path d="M15.7 12.8602L9.7 18.8602C9.5 19.0602 9.3 19.1602 9 19.1602C8.7 19.1602 8.5 19.0602 8.3 18.8602C7.9 18.4602 7.9 17.8602 8.3 17.4602L13.6 12.1602L8.3 6.86016C7.9 6.46016 7.9 5.86016 8.3 5.46016C8.7 5.06016 9.3 5.06016 9.7 5.46016L15.7 11.4602C16.1 11.8602 16.1 12.4602 15.7 12.8602Z" fill="black"/>
                                </a>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection