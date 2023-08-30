@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Выступления и Статьи
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Выступления и Статьи</h1>


        <a href="{{ route('articles.create') }}">
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
        @foreach ($articles_all as $article)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $article->id }}</div>
                <div class="w35">{{ $article->title_tm }}</div>
                <div class="w35">
                    {!! $article->description_tm !!}
                </div>
                <div class="date w15">{{ $article->published_date }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('articles.edit', $article->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $article->id }}" value="">
                    <label for="{{ $article->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
