@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Созывы
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Созывы</h1>

        {{-- <a href="{{ route('convocations.create') }}">
            Добавить
        </a> --}}

    </div>

    <!--====================================
                    LIST
    =====================================-->


    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w35">Номер</div>
            <div class="w35">Описание</div>
            <div class="date w15">Дата изменения</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        <!-- list__item -->
        @foreach ($convocations_all as $convocation)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $convocation->id }}</div>
                <div class="w35">{{ $convocation->number }}</div>
                <div class="w35">
                    {{-- {!! $article->description_tm !!} --}}
                </div>
                <div class="date w15">{{ $convocation->updated_at }} </div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('convocations.edit', $convocation->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
