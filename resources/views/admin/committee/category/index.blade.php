@extends('admin.layouts.main')

@section('crumbs')

            <div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Комитеты
    </div>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{route('admin.committee.category.index')}}">
        Категории
    </a>

</div>

@endsection


@section('content')

            <div class="content">
    <div class="title">
        <h1 class="title">Категории</h1>


        <a href="{{ route('admin.committee.category.create') }}">
            Добавить
        </a>

    </div>

    <!--====================================
                    LIST
    =====================================-->
    <!-- #####. HOME. #####. -->
    <!-- =================== -->


    <!-- #####. categories. #####. -->
    <!-- ========================= -->

    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w25">TM-Название</div>
            <div class="w25">RU-Название</div>
            <div class="w25">EN-Название</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        @foreach ($categories as $category)

        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{$category->num}}</div>
                <div class="w25">{{$category->tm_title}}</div>
                <div class="w25">{{$category->ru_title}}</div>
                <div class="w25">{{$category->en_title}}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{route('admin.committee.category.edit', $category)}}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>

                <form action="{{ route('admin.committee.category.destroy', $category)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{$category->id}}" value="">
                    <label for="{{$category->id}}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>

            </div>
        </div>

        @endforeach
    </div>


    <!-- #####. Subcategories. #####. -->
    <!-- ============================ -->


    <!-- #####. NEWS. #####. -->
    <!-- ============================ -->


    <!-- #####. methodicalMaterials. #####. -->
    <!-- ============================ -->


    <!-- #####. scienceArticles. #####. -->
    <!-- ============================ -->

</div>
@endsection
