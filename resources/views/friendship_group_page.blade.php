@extends('layout',['title' => __('app.friendship_group_page.title')])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/friendship_group_page.css') }}">
@endpush

@php
    $links_list = [
                    ['name'=>__('app.international_cooperation_page.title'), 'url' => route('international_cooperation_page',['lang' => app()->getLocale()])],
                    ['name'=>__('app.friendship_group_page.title'),'is_active'=>'active','url' => route('friendship_group_page',['lang' => app()->getLocale()])], 
                    ['name'=>__('app.news_international_page.title'), 'url' => route('news_international_page',['lang' => app()->getLocale()])],
    ];
    $breadcrumbs_array = [
                    ['name' => __('app.main.title'), 'url' => route('main_page', ['lang' => app()->getLocale()])],
                    ['name' => __('app.layout.international'), 'url' => '#'],
                    ['name' => __('app.friendship_group_page.title'), 'url' => request()->fullUrl()],
    ];
    
@endphp

@section('content')
    <div class="friendship_group_page flex_row">
        <div class="inner_wrapper flex_column">
            <x-breadcrumbs :breadcrumbs-array="$breadcrumbs_array" />

            <div class="page_content_block flex_row">

                <x-sidebar :links-list="$links_list" title="{{ __('app.layout.international') }}"/>

                <div class="middle_column flex_column">
                    {{-- <div class="block_title">
                        @lang('app.friendship_group_page.title_full')
                    </div> --}}

                    <div class="flags_block flex_column">
                        <div class="images_row flex_row">
                            <img src="{{ asset($selected_group->flag_1) }}" alt="">
                            <img src="{{ asset($selected_group->flag_2) }}" alt="">
                        </div>
                        <p class="group_name">
                            {{ $selected_group->{'title_' . $current_lang->code} }}
                        </p>
                    </div>

                    <div class="group_members_block flex_row">
                        @foreach ($selected_group->members as $deputy)
                            <div class="group_member_container flex_column">
                                <a href="{{ route('single_deputy_page', ['id'=>$deputy->id, 'lang'=>app()->getLocale()]) }}" class="name">{{ $deputy->{'fullname_' . $current_lang->code} }}</a>
                                <p class="position_name">
                                    {{ $deputy->{'position_' . $current_lang->code} }}
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <div class="text_block">
                        {{-- <h4 class="text_title">{{ $selected_group->{'title_' . $current_lang->code} }}</h4> --}}
                        
                        <div class="text_content">
                            {!! $selected_group->{'description_' . app()->getLocale()} !!}
                        </div>
                    </div>
                </div>

                <x-sidebar-right title="" :items-list="$groups_all" :current-item-id="$selected_group->id" route-name="friendship_group_page"/>
            </div>
        </div>
    </div>
    
@endsection