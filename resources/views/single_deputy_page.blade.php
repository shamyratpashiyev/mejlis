@extends('layout',['title' => __('app.mejlis_deputies_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/single_deputy_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_committees_page.title'), 'url' => route('mejlis_committees_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.mejlis_deputies_page.title'), 'is_active'=>'active','url' => route('mejlis_deputies_page',['lang' => app()->getLocale()])], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.mejlis_structure'), 'url' => '#'],
                    ['name' => __('app.mejlis_deputies_page.title'), 'url' => route('mejlis_deputies_page', ['lang' => app()->getLocale()])],
                    ['name' => $selected_deputy->{'fullname_' . $current_lang->code}, 'url' => route(Route::currentRouteName(), ['id'=>$selected_deputy->id,'lang' => app()->getLocale()]) ],
    ];
    
@endphp

@section('content')
    <div class="single_deputy_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure') }}"/>

                <div class="right_block flex_column">

                    <h3 class="name">{{ $selected_deputy['fullname_' . $current_lang->code] }}</h3>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">@lang('app.mejlis_deputies_page.position'):</span>
                        <span class="value">{{ $selected_deputy->{'position_' . $current_lang->code} }}</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">@lang('app.mejlis_deputies_page.birth_year'):</span>
                        <span class="value">{{ $selected_deputy->{'birth_year_' . $current_lang->code} }}</span>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">@lang('app.mejlis_deputies_page.committee'):</span>
                        <div class="value flex_column">
                            @foreach ($selected_deputy->committees as $committee)
                                <p>{{ $committee->{'name_' . $current_lang->code} }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">@lang('app.mejlis_deputies_page.district'):</span>
                        <div class="value link flex_column" id="election_district_wrapper">
                            <span class="district_name">{{ $selected_deputy->district->{'name_' . $current_lang->code} ?? '' }}</span>
                            <div class="district_borders_text">{!! $selected_deputy->district->{'borders_' . $current_lang->code} ?? '' !!}</div>
                        </div>
                    </div>

                    <div class="key_value_wrapper flex_row">
                        <span class="key">@lang('app.mejlis_deputies_page.biography'):</span>
                        <div class="value link flex_column" id="deputy_bio_wrapper">
                            <span>@lang('app.buttons.more_button')</span>
                            <div class="deputy_bio_text">
                                {!! $selected_deputy->{'biography_' . $current_lang->code} !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            const district_name = $('#election_district_wrapper')
            const deputy_bio = $('#deputy_bio_wrapper')
            const districtInitialHeight = district_name.height() + 4        //Adding four to it because it gives me wrong height value
            const deputyInitialHeight = deputy_bio.height() + 4        //Adding four to it because it gives me wrong height value
            
            district_name.css({'height': districtInitialHeight + 'px'})    //Setting the height in pixels to enable the transition effect
            deputy_bio.css({'height': deputyInitialHeight + 'px'})    //Setting the height in pixels to enable the transition effect

            district_name.on('click', (event)=>{
                const district_borders_text = $('#election_district_wrapper .district_borders_text')
                if(district_name.hasClass('active')){
                    district_name.removeClass('active')
                    district_name.css({'height': districtInitialHeight + 'px'})

                } else {            //Turning off the other element (the deputy bio) when this one is activated
                    deputy_bio.removeClass('active')
                    deputy_bio.css({'height': districtInitialHeight + 'px'})

                    district_name.addClass('active')
                    district_borders_text.css({'display': 'block'})
                    district_name.height((districtInitialHeight + district_borders_text.height() + 20) + 'px')   //20px is a row gap
                }
                
            })

            deputy_bio.on('click', (event)=>{
                const deputy_bio_text = $('#deputy_bio_wrapper .deputy_bio_text')
                if(deputy_bio.hasClass('active')){
                    deputy_bio.removeClass('active')
                    deputy_bio.css({'height': districtInitialHeight + 'px'})

                } else {        //Turning off the other element (the district name) when this one is activated
                    district_name.removeClass('active')
                    district_name.css({'height': districtInitialHeight + 'px'})

                    deputy_bio.addClass('active')
                    deputy_bio_text.css({'display': 'block'})
                    deputy_bio.height((districtInitialHeight + deputy_bio_text.height() + 20) + 'px')   //20px is a row gap
                }
                
            })
        })
    </script>
@endsection