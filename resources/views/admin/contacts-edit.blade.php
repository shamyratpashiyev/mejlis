@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('admin.main') }}">
        Главная страница
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Контакты
    </div>

</div>

@endsection


@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Контакты</h1>
    </div>

    <form action="{{ route('admin.main.contacts.update', $contact) }}" method="post" class="edit__form">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w20">
                <label class="txt">Телефон для функционала</label>
                <input type="text" placeholder="+99312454545" class="inputTxt" name="phone_func" value="{{ $contact->phone_func }}">
                @error('phone_func')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w20">
                <label class="txt">Телефон для отображения</label>
                <input type="text" class="inputTxt" name="phone_display" value="{{ $contact->phone_display }}">
                @error('phone_display')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w20">
                <label class="txt">Факс</label>
                <input type="text" class="inputTxt" name="fax" value="{{ $contact->fax }}">
                @error('fax')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w20">
                <label class="txt">E-mail</label>
                <input type="text" class="inputTxt" name="email" value="{{ $contact->email }}">
                @error('email')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Адрес</label>
                <input type="text" class="inputTxt" name="tm_address" value="{{ $contact->tm_address }}">
                @error('tm_address')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Адрес</label>
                <input type="text" class="inputTxt" name="ru_address" value="{{ $contact->ru_address }}">
                @error('ru_address')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Адрес</label>
                <input type="text" class="inputTxt" name="en_address" value="{{ $contact->en_address }}">
                @error('en_address')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('admin.main') }}">Отмена</a>
            </div>
        </div>
    </form>

    @if (session('success'))
    <div class="row">
        {{session('success')}}
    </div>
    @endif

    <!-- categories_edit -->
    <!-- =============== -->


    <!-- subcategories_edit -->
    <!-- ================== -->


    <!-- news_edit -->
    <!-- ========= -->


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>


@endsection
