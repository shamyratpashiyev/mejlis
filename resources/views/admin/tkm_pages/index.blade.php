@extends('admin.layouts.main')

@section('crumbs')


<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        История
    </div>
</div>

@endsection


@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">История</h1>


        

    </div>

    <!--====================================
                    LIST
    =====================================-->

    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w35">Название</div>
            <div class="w35">Описание</div>
            <div class="date w15">Дата</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        <!-- list__item -->
        @foreach($items_all as $item )

            <div class="list__item">
                <div class="item__txt">
                    <div class="w5">{{ $item->id }}</div>
                    <div class="w35"> {{ $item->title_tm }} </div>
                    <div class="w35">
                        {!! $item->content_tm !!}
                    </div>
                    <div class="date w15"> {{ $item->event_date }} </div>
                </div>

                <div class="item__button w5a5">
                    <a href="{{ route("{$current_route_name}.edit", $item->id) }}">
                        <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                    </a>

                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
