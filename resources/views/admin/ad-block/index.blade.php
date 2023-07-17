@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Блок "Объявление"
    </div>


</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Блок "Объявление"</h1>


        <a href="{{route('admin.ad-block.create')}}">
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
        @foreach ($adblocks as $key => $adblock)

        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{$key + 1}}</div>
                <div class="w35">{{$adblock->ru_title}}</div>
                <div class="w35">
                    {{$adblock->ru_content}}
                </div>
                <div class="date w15">{{$date[$adblock->id]}}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{route('admin.ad-block.edit', $adblock)}}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>

                <form action="{{route('admin.ad-block.destroy', $adblock) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{$adblock->id}}" value="">
                    <label for="{{$adblock->id}}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach

    </div>


    <!-- #####. scienceArticles. #####. -->
    <!-- ============================ -->

</div>

@endsection
