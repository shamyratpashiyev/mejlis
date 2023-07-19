@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Кодексы
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Кодексы</h1>


        <a href="{{ route('codes.create') }}">
            Добавить
        </a>

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
        @foreach ($codes_all as $code)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $code->id }}</div>
                <div class="w35">{{ $code->title_tm }}</div>
                <div class="w35">
                    {!! $code->description_tm !!}
                </div>
                <div class="date w15">{{ $code->event_date }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('codes.edit', $code->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('codes.destroy', $code->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $code->id }}" value="">
                    <label for="{{ $code->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
