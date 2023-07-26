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
                    <div class="block_title">
                        @lang('app.friendship_group_page.title_full')
                    </div>

                    <div class="text_block">
                        <h4 class="text_title">{{ $selected_group->{'title_' . $current_lang->code} }}</h4>
                        
                        <div class="text_content">
                            {!! $selected_group->{'description_' . app()->getLocale()} !!}
                        </div>
                    </div>
                </div>

                <div class="right_column flex_column">
                    @foreach ($groups_all as $group)
                        <a href="{{ route('friendship_group_page',['id'=>$group->id, 'lang'=>app()->getLocale()]) }}" class="item @if($group->id == $selected_group->id) active @endif">{{ $group->{'title_' . $current_lang->code} }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endsection