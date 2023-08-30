@extends('layout',['title' => __('app.mejlis_deputies_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_deputies_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_committees_page.title'), 'url' => route('mejlis_committees_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.mejlis_deputies_page.title'), 'is_active'=>'active','url' => route('mejlis_deputies_page',['lang' => app()->getLocale()])], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.mejlis_structure'), 'url' => '#'],
                    ['name' => __('app.mejlis_deputies_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
    
@endphp

@section('content')
    <div class="mejlis_deputies_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure') }}"/>

                <div class="right_block flex_column">

                    <div class="title_row flex_row">
                        <h3 class="title">@lang('app.mejlis_deputies_page.deputies')</h3>
                        
                        <div class="select_block flex_row">
                            <select id="velayats_select">
                                <option value="--">@lang('app.mejlis_deputies_page.velayat')</option>
                                @foreach ($velayats_all as $velayat)
                                    <option value="{{ $velayat->id }}">{{ $velayat->{'name_' . app()->getLocale()} }}</option>
                                @endforeach
                            </select>

                            <select id="districts_select">
                                <option value="--">@lang('app.mejlis_deputies_page.election_district')</option>
                                @foreach ($election_districts_all as $district)
                                    <option value="{{ $district->id }}">{{ $district->{'name_' . app()->getLocale()} }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="letters_row flex_row">
                       @lang('app.alphabet')
                    </div>

                    <div class="deputies_block flex_row">
                        @foreach ($deputies_all as $deputy)
                            <div class="deputy_container flex_column" data-deputy-id="{{ $deputy->id }}" data-href-value="{{ route('single_deputy_page', ['id'=>$deputy->id, 'lang' => app()->getLocale()]) }}">
                                <span class="name">{{ $deputy->{'fullname_' . $current_lang->code} }}</span>
                                <x-deputy-popup name="{{ $deputy->{'fullname_' . $current_lang->code} }}" district="{{ $deputy->district->{'name_' . $current_lang->code} ?? '' }}" :bio="$deputy->{'biography_' . $current_lang->code}" />

                                <div class="key_value_wrapper flex_column">
                                    <span class="key election_district">@lang('app.mejlis_deputies_page.election_district'):</span>
                                    <span class="value">{{ $deputy->district->{'name_' . $current_lang->code} ?? '' }}</span>
                                    <x-election-district-popup name="{{ $deputy->district->{'name_' . $current_lang->code} ?? '' }}" :borders="$deputy->district->{'borders_' . $current_lang->code} ?? ''"/>
                                </div>

                                {{-- <div class="key_value_wrapper flex_column">
                                    <span class="key">E-mail:</span>
                                    <span class="value">{{ $deputy->email }} </span>
                                </div> --}}

                                <div class="key_value_wrapper flex_column">
                                    <span class="key">@lang('app.mejlis_deputies_page.committee'):</span>
                                    <div class="value flex_column">
                                        @foreach ($deputy->committees as $committee)
                                            <span>{{ $committee->{'name_' . app()->getLocale()} }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
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


            const deputies_list_initial = JSON.parse(`{{ json_encode($deputies_json) }}`.replaceAll('&quot;','"'))
            const current_lang = "{{ $current_lang->code }}"
            let selected_letter = '--'
            let selected_velayat_id = '--';
            let selected_district_id = '--';

            $('.letter, #velayats_select, #districts_select').on('click', (event) => {
                if($(event.target).hasClass('letter')){
                    if($(event.target).hasClass('active')){
                        $('.letter').removeClass('active')
                        selected_letter = '--'
                    } else {
                        $('.letter').removeClass('active')
                        $(event.target).addClass('active')
                        selected_letter = $(event.target).data('letter');
                    }
                } else if(event.target.id == 'velayats_select'){
                    selected_velayat_id = $(event.target).val();
                } else if(event.target.id == 'districts_select'){
                    selected_district_id = $(event.target).val();
                }
                
                const filtered_list = deputies_list_initial.filter((obj) => {
                    return (selected_letter == '--' || obj[`fullname_${current_lang}`].toLowerCase().startsWith(selected_letter)) //If it starts with selected_letter or the letter isn't selected
                            &&(selected_velayat_id == '--' || obj.velayat_id == selected_velayat_id)        //If velayat_id is equal to selected_velayat_id or velayat isn't selected
                            &&(selected_district_id == '--' || obj.election_district_id == selected_district_id)
                })
                refreshDeputiesList(filtered_list);
            })


            function refreshDeputiesList(deputies_list) {
                document.querySelectorAll('.deputy_container').forEach((elem)=>{
                    elem.style.setProperty( 'display', 'none', 'important' )
                })

                deputies_list.forEach((element) => {
                    $(`.deputy_container[data-deputy-id=${element.id}]`).css('display', 'flex')
                });
            }
        })
        
    </script>
@endsection