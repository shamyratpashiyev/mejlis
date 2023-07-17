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
        О нас
    </div>

</div>

@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">О нас</h1>
    </div>


    <form action="{{ route('admin.main.aboutus.update', $aboutus) }}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Содержание на главной странице</label>
                <div class="txtBox">
                    <textarea name="tm_content_main">{{ $aboutus->tm_content_main }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 520 символов</span>
                        </div>
                    </div>
                </div>
                @error('tm_content_main')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Содержание на главной странице</label>
                <div class="txtBox">
                    <textarea name="ru_content_main">{{ $aboutus->ru_content_main }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 520 символов</span>
                        </div>
                    </div>
                </div>
                @error('ru_content_main')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Содержание на главной странице</label>
                <div class="txtBox">
                    <textarea name="en_content_main">{{ $aboutus->en_content_main }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 520 символов</span>
                        </div>
                    </div>
                </div>
                @error('en_content_main')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Содержание на странице о нас</label>
                <textarea id="editor-1" name="tm_content_base">{{ $aboutus->tm_content_base }}</textarea>
                @error('tm_content_base')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Содержание на странице о нас</label>
                <textarea id="editor-2" name="ru_content_base">{{ $aboutus->ru_content_base }}</textarea>
                @error('ru_content_base')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Содержание на странице о нас</label>
                <textarea id="editor-3" name="en_content_base">{{ $aboutus->en_content_base }}</textarea>
                @error('en_content_base')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item alignBot w30">
                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> png, jpeg, jpg</span>
                            <span><b>Размер:</b> 640 x 425px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                    <p class="err">{{$message}}</p>
                    @enderror
                </div>
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