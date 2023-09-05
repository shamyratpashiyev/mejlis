@extends('layout',['title' => __('app.mejlis_committees_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_committees_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.mejlis_committees_page.title'), 'is_active' => 'active', 'url' => route('mejlis_committees_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.mejlis_deputies_page.title'),'url' => route('mejlis_deputies_page',['lang' => app()->getLocale()])], 
    ];

    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.mejlis_structure'), 'url' => '#'],
                    ['name' => __('app.mejlis_committees_page.title'), 'url' => route(Route::currentRouteName(), ['lang' => app()->getLocale()])],
    ];
@endphp

@section('content')
    <div class="mejlis_committees_page flex_row">
        <div class="inner_wrapper flex_column">
            
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.mejlis_structure') }}"/>

                <div class="middle_column">
                    <h3 class="block_title">{{ $selected_committee->{'name_' . $current_lang->code} }}</h3>

                    @if($selected_committee->committee_head)
                        <div class="committee_head_block flex_column">
                            <div class="committee_member_container flex_column">
                                <a href="{{ route('single_deputy_page', ['id'=>$selected_committee->committee_head->id, 'lang'=>app()->getLocale()]) }}" class="name">
                                    {{ $selected_committee->committee_head->{'fullname_' . $current_lang->code} }}
                                </a>
                                <p class="position_name">
                                    {{ $selected_committee->committee_head->{'position_' . $current_lang->code} }}
                                </p>
                            </div>
                        </div>
                    @endif

                    <div class="committee_members_block flex_row">
                        @foreach ($selected_committee->deputies as $deputy)
                            @if($deputy->id != $selected_committee->committee_head_id)
                                <div class="committee_member_container flex_column">
                                    <a href="{{ route('single_deputy_page', ['id'=>$deputy->id, 'lang'=>app()->getLocale()]) }}" class="name">{{ $deputy->{'fullname_' . $current_lang->code} }}</a>
                                    <p class="position_name">
                                        {{ $deputy->{'position_' . $current_lang->code} }}
                                    </p>
                                </div>
                            @endif
                        @endforeach

                        
                        
                        
                    </div>
                </div>

                <x-sidebar-right :title="__('app.mejlis_committees_page.mejlis_committees')" :items-list="$committees_all" 
                    :current-item-id="$selected_committee->id" routeName="mejlis_committees_page"/>
            </div>
        </div>
    </div>
@endsection