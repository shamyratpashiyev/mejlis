@extends('layout',['title' => __('app.convocation_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/convocation_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_history_page.title'), 'url' => route('mejlis_history_page',['lang' => app()->getLocale()])],
                    ['name'=> __('app.layout.convocation_page'), 'is_active' => 'active', 'url' => route('convocation_page',['lang' => app()->getLocale()])],
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.about_mejlis'), 'url' => '#'],
                    ['name' => __('app.convocation_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')

    <div class="convocation_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.about_mejlis') }}" />

                <div class="right_side">
                    <h3 class="block_title">@lang('app.convocation_page.convocation_deputies_list')</h3>

                    <div class="search_block flex_column">

                        <div class="letters_row flex_row">
                            @lang('app.alphabet')
                        </div>

                        <div class="select_row">
                            <select>
                                <option value="--">@lang('app.convocation_page.district')</option>
                                @foreach ($districts_all as $district)
                                    <option value="{{ $district->id }}">{{ $district->{'name_' . app()->getLocale()} }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="deputies_list_block flex_row">
                        @foreach ($deputies_all as $deputy)
                            <a href="{{ route('single_deputy_page', ['id' => $deputy->id, 'lang'=>app()->getLocale()]) }}" class="deputy_name">{{ $deputy->{'fullname_' . $current_lang->code} }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        
        $(document).ready(function (){
            const deputies_list_initial = JSON.parse(`{{ json_encode($deputies_all) }}`.replaceAll('&quot;','"'))
            const current_lang = "{{ $current_lang->code }}"
            const single_deputy_page = "{{ route('single_deputy_page',['id'=>1,'lang'=>$current_lang->code]) }}"
            let selected_letter = '--'
            let selected_district_id = '--'
            
            $('.letter, .select_row select').on('click', (event) => {
                if($(event.target).hasClass('letter')){
                    if($(event.target).hasClass('active')){
                        $('.letter').removeClass('active')
                        selected_letter = '--'
                    } else {
                        $('.letter').removeClass('active')
                        $(event.target).addClass('active')
                        selected_letter = $(event.target).data('letter');
                    }

                } else{
                    selected_district_id = $(event.target).val();
                }
                
                const filtered_list = deputies_list_initial.filter((obj) => {
                    return (selected_letter == '--' || obj[`fullname_${current_lang}`].toLowerCase().startsWith(selected_letter))   //If fullname starts with selected letter of the letter isn't selected
                            && (selected_district_id == '--' || obj.election_district_id == selected_district_id)
                    
                });
                refreshDeputiesList(filtered_list);
            })

            function refreshDeputiesList(deputies_list) {
                $('.deputy_name').remove();
            
                deputies_list.forEach((element) => {
                    $('.deputies_list_block').append(`
                        <a href="${single_deputy_page.replace('1',element.id)}" class="deputy_name">${element['fullname_' + current_lang]}</a>
                    `)
                });
            }
        })

        
    </script>

@endsection