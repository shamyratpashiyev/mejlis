@extends('admin.layouts.main')

@section('crumbs')


<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Новости
    </div>
</div>

@endsection


@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Новости</h1>


        

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
        @foreach($histories_all as $history )

            <div class="list__item">
                <div class="item__txt">
                    <div class="w5">{{ $history->id }}</div>
                    <div class="w35"> {{ $history->title_tm }} </div>
                    <div class="w35">
                        {!! $history->content_tm !!}
                    </div>
                    <div class="date w15"> {{ $history->event_date }} </div>
                </div>

                <div class="item__button w5a5">
                    <a href="{{ route('tkm_history.edit', $history->id) }}">
                        <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                    </a>

                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
