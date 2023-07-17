@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Комитеты
    </div>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{route('admin.committee.subcategory.index')}}">
        Подкатегории
    </a>

</div>

@endsection

@section('content')


            <div class="content">
                <div class="title">
                    <h1 class="title">Подкатегории</h1>


        <a href="{{route('admin.committee.subcategory.create')}}">
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


    <!-- #####. Subcategories. #####. -->
    <!-- ============================ -->

    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w25">TM-Название</div>
            <div class="w25">RU-Название</div>
            <div class="w25">EN-Название</div>
            <div class="w25">Категория</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        @foreach ($subCategories as $subcategory)
        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">

                <div class="w5">{{$subcategory->id}}</div>
                <div class="w25">{{$subcategory->tm_title}}</div>
                <div class="w25">{{$subcategory->ru_title}}</div>
                <div class="w25">{{$subcategory->en_title}}</div>
                @if($subcategory->category)
                <div class="w25">{{$subcategory->category->ru_title}}</div>
                @endif
            </div>

            <div class="item__button w5a5">
                <a href="{{route('admin.committee.subcategory.edit', $subcategory)}}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>

                <form action="{{route('admin.committee.subcategory.destroy', $subcategory)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{$subcategory->id}}" value="">
                    <label for="{{$subcategory->id}}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}" alt="">
                    </label>
                </form>

            </div>
        </div>
        @endforeach
    </div>


    <!-- #####. NEWS. #####. -->
    <!-- ============================ -->


    <!-- #####. methodicalMaterials. #####. -->
    <!-- ============================ -->


    <!-- #####. scienceArticles. #####. -->
    <!-- ============================ -->

</div>

@endsection
