@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Постановления Меджлиса
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Постановления Меджлиса</h1>


        <a href="{{ route('mejlis_decrees.create') }}">
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
        @foreach ($decrees_all as $decree)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $decree->id }}</div>
                <div class="w35">{{ $decree->title_tm }}</div>
                <div class="w35">
                    {!! $decree->description_tm !!}
                </div>
                <div class="date w15">{{ $decree->event_date }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('mejlis_decrees.edit', $decree->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('mejlis_decrees.destroy', $decree->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $decree->id }}" value="">
                    <label for="{{ $decree->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
