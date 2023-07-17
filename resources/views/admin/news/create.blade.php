@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('admin.news.index') }}">
        Новости
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Добавление новости
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Добавление Новости</h1>
    </div>

    <form action="{{route('admin.news.store')}}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input value="{{old('tm_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="tm_title">
                @error('tm_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input value="{{old('ru_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="ru_title">
                @error('ru_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input value="{{old('en_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="en_title">
                @error('en_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - описание</label>
                <textarea id="editor-10" name="tm_content">{{old('tm_content')}}</textarea>
                @error('tm_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-11" name="ru_content">{{old('ru_content')}}</textarea>
                @error('ru_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - описание</label>
                <textarea id="editor-12" name="en_content">{{old('en_content')}}</textarea>
                @error('en_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата</label>
                <input type="datetime-local" class="inputDate" name="date">
                @error('date')
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
                    <input type="file" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="main_image">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('main_image')
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
                <a href="{{ route('admin.news.index') }}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>


@endsection
