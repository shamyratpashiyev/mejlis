@extends('admin.layouts.main')

@section('crumbs')


<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Конституция
    </div>
</div>

@endsection


@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Конституция</h1>


        

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
        @foreach($constitutions_all as $constitution )

            <div class="list__item">
                <div class="item__txt">
                    <div class="w5">{{ $constitution->id }}</div>
                    <div class="w35"> {{ $constitution->title_tm }} </div>
                    <div class="w35">
                        {!! $constitution->content_tm !!}
                    </div>
                    <div class="date w15"> {{ $constitution->event_date }} </div>
                </div>

                <div class="item__button w5a5">
                    <a href="{{ route('tkm_constitution.edit', $constitution->id) }}">
                        <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                    </a>

                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
