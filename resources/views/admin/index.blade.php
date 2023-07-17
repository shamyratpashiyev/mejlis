@extends('admin.layouts.main')

@section('crumbs')
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Главная страница
    </div>
</div>

@endsection

@section('content')
<div class="content">
    <div class="title">
        <h1 class="title">Главная страница</h1>


    </div>

    <!--====================================
                    LIST
    =====================================-->
    <!-- #####. HOME. #####. -->
    <!-- =================== -->

    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w25">Название</div>
        </div>
        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">1</div>
                <div class="w25">Шапка сайта</div>
            </div>

            <div class="item__button w5a5">
                <a href="#">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>
            </div>
        </div>

        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">2</div>
                <div class="w25">Главное фото под шапкой</div>
            </div>

            <div class="item__button w5a5">
                <a href="#">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>
            </div>
        </div>

        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">3</div>
                <div class="w25">Блок "Счетчик статистики"</div>
            </div>

            <div class="item__button w5a5">
                <a href="#">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>
            </div>
        </div>

        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">5</div>
                <div class="w25">О нас</div>
            </div>

            <div class="item__button w5a5">
                <a href="#">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>
            </div>
        </div>

        <!-- list__item -->
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">6</div>
                <div class="w25">Контакты</div>
            </div>

            <div class="item__button w5a5">
                <a href="#">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg') }}">
                </a>
            </div>
        </div>
    </div>


</div>
@endsection