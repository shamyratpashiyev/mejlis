@extends('admin.layouts.main')

@section('crumbs')


<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Международное соотрудничество
    </div>
</div>

@endsection


@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Международное соотрудничество</h1>


        <a href="{{ route('news_coop.create') }}">
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
        @foreach($news_all as $news )

            <div class="list__item">
                <div class="item__txt">
                    <div class="w5">{{ $news->id }}</div>
                    <div class="w35"> {{ $news->title_tm }} </div>
                    <div class="w35">
                        {!! $news->description_tm !!}
                    </div>
                    <div class="date w15"> {{ $news->event_date }} </div>
                </div>

                <div class="item__button w5a5">
                    <a href="{{ route('news_coop.edit', $news->id) }}">
                        <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                    </a>

                    <form action="{{ route('news_coop.destroy', $news->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <label for="{{ $news->id }}">
                            <img src="{{ asset('admins/img/ico/delete.svg') }}">
                        </label>
                        <input type="submit" id="{{ $news->id }}" value="{{ $news->id }}" style="font-size: 0;">
                        
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
