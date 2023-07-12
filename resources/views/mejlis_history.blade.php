@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mejlis_history.css') }}">
@endpush

@section('content')
    <div class="mejlis_history_page flex_row">
        <div class="inner_wrapper flex_column">
            <div class="breadcrumbs_row">
                Baş sahypa / Mejlis hakynda / Mejlisiň taryhy
            </div>
        </div>
    </div>
@endsection