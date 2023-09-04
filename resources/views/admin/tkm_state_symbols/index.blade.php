@extends('admin.layouts.main')

@section('crumbs')


<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Государственные Символы
    </div>
</div>

@endsection


@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Государственные Символы</h1>


        

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
        @foreach($state_symbols_all as $state_symbol )

            <div class="list__item">
                <div class="item__txt">
                    <div class="w5">{{ $state_symbol->id }}</div>
                    <div class="w35"> {{ $state_symbol->title_tm }} </div>
                    <div class="w35">
                        {!! $state_symbol->content_tm !!}
                    </div>
                    <div class="date w15"> {{ $state_symbol->event_date }} </div>
                </div>

                <div class="item__button w5a5">
                    <a href="{{ route('tkm_state_symbols.edit', $state_symbol->id) }}">
                        <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                    </a>

                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
