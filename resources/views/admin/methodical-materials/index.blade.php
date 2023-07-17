@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Методические материалы
    </div>


</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Методические материалы</h1>


        <a href="{{route('admin.metodical-material.create')}}">
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
        @foreach ($metodicals as $key => $metodical)

        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{$key + 1}}</div>
                <div class="w35">{{$metodical->ru_title}}</div>
                <div class="w35">
                    {{$metodical->ru_conten}}
                </div>
                <div class="date w15">{{$date[$metodical->id]}}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{route('admin.metodical-material.edit', $metodical)}}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>

                <form action="{{ route('admin.metodical-material.destroy', $metodical)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{$metodical->id}}" value="">
                    <label for="{{$metodical->id}}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach

    </div>


</div>

@endsection