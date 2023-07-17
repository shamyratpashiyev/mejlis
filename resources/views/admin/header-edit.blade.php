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
        Шапка сайта
    </div>
</div>
@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Шапка сайта</h1>
    </div>

    <form action="{{ route('admin.main.header.update', $header) }}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">TM - Название №1</label>
                <input type="text" name="tm_one" class="inputTxt" value="{{ $header->tm_one }}">
                @error('tm_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">RU - Название №1</label>
                <input type="text" name="ru_one" class="inputTxt" value="{{ $header->ru_one }}">
                @error('ru_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">EN - Название №1</label>
                <input type="text" name="en_one" class="inputTxt" value="{{ $header->en_one }}">
                @error('en_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">TM - Название №2</label>
                <input type="text" name="tm_two" class="inputTxt" value="{{ $header->tm_two }}">
                @error('tm_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">RU - Название №2</label>
                <input type="text" name="ru_two" class="inputTxt" value="{{ $header->ru_two }}">
                @error('ru_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w25">
                <label class="txt">EN - Название №2</label>
                <input type="text" name="en_two" class="inputTxt" value="{{ $header->en_two }}">
                @error('en_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <span class="label">логотип №1</span>
                <div class="file__box">
                    <label for="file-1" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-1" name="logo_one" class="inputFile" accept="image/png, image/jpg, image/jpeg, image/svg+xml">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> png, svg, jpeg, jpg</span>
                        </div>
                    </div>
                </div>
                @error('logo_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <span class="label">логотип №2</span>
                <div class="file__box">
                    <label for="file-2" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-2" name="logo_two" class="inputFile" accept="image/png, image/jpg, image/jpeg, image/svg+xml">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> png, svg, jpeg, jpg</span>
                        </div>
                    </div>
                </div>
                @error('logo_two')
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

</div>

@endsection