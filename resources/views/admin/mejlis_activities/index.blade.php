@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Деятельность Меджлиса
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Деятельность Меджлиса</h1>


        <a href="{{ route('mejlis_activities.create') }}">
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
        @foreach ($activities_all as $activity)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $activity->id }}</div>
                <div class="w35">{{ $activity->title_tm }}</div>
                <div class="w35">
                    {!! $activity->description_tm !!}
                </div>
                <div class="date w15">{{ $activity->event_date }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('mejlis_activities.edit', $activity->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('mejlis_activities.destroy', $activity->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $activity->id }}" value="">
                    <label for="{{ $activity->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
