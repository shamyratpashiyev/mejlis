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


        <a href="{{ route('admin.news.create') }}">
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
        @foreach($news as $key => $item )

        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{$key + 1}}</div>
                <div class="w35">{{ $item->ru_title }}</div>
                <div class="w35">
                    {!! $item->ru_content !!}
                </div>
                <div class="date w15">{{ $date[$item->id] }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('admin.news.edit', $item) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>

                <form action="{{ route('admin.news.destroy', $item)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{$item->id}}" value="">
                    <label for="{{$item->id}}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>

                {{-- <a class="btn btn-info" href="{{ route('admin.news.destroy', $item)}}">
                <img src="{{ asset('admins/img/ico/delete.svg') }}">
                </a> --}}
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
