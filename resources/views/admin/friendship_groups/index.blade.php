@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Группы дружбы
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Группы дружбы</h1>


        <a href="{{ route('friendship_groups.create') }}">
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
        @foreach ($groups_all as $group)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $group->id }}</div>
                <div class="w35">{{ $group->title_tm }}</div>
                <div class="w35">
                    {!! $group->description_tm !!}
                </div>
                <div class="date w15">{{ $group->event_date }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('friendship_groups.edit', $group->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('friendship_groups.destroy', $group->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $group->id }}" value="">
                    <label for="{{ $group->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
