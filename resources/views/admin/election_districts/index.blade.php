@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Избирательные Округи
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Избирательные Округи</h1>


        <a href="{{ route('election_districts.create') }}">
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
        @foreach ($districts_all as $district)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $district->id }}</div>
                <div class="w35">{{ $district->name_tm }}</div>
                <div class="w35">
                    {{-- {!! $district->description_tm !!} --}}
                </div>
                <div class="date w15">$district->event_date </div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('election_districts.edit', $district->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('election_districts.destroy', $district->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $district->id }}" value="">
                    <label for="{{ $district->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
