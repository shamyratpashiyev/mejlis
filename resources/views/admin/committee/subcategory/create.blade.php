@extends('admin.layouts.main')


@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{route('admin.committee.subcategory.index')}}">
        Комитеты
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Под категория
    </div>

</div>
@endsection



@section('content')


<div class="content">

    <div class="title">
        <h1 class="title">Добавление под категории комитета</h1>
    </div>


    <form action="{{route('admin.committee.subcategory.store')}}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input value="{{old('tm_title')}}" type="text" placeholder="Hirurgiýa" class="inputTxt" name="tm_title">
                @error('tm_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input value="{{old('ru_title')}}" type="text" placeholder="Хирургия" class="inputTxt" name="ru_title">
                @error('ru_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input value="{{old('en_title')}}" type="text" placeholder="Surgery" class="inputTxt" name="en_title">
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
                <textarea id="editor-7" name="tm_content">{{old('tm_content')}}</textarea>
                @error('tm_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-8" name="ru_content">{{old('ru_content')}}</textarea>
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
                <textarea id="editor-9" name="en_content">{{old('en_content')}}</textarea>
                @error('en_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w20">
                <label class="txt">Категория комитета</label>
                <div class="custom-select">
                    <select name="category_id">
                        <option>все</option>
                        @foreach ( $categories as $category)
                        <option value="{{$category->id}}">{{$category->ru_title}}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
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
                    <input type="file" name="image" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 710 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                    <p class="err">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <div class="form__item w10">
                <label class="txt">Нумерация</label>
                <input value="{{old('num')}}" type="number" placeholder="1" class="inputTxt" name="num">
                @error('num')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{route('admin.committee.subcategory.index')}}">Отмена</a>
            </div>
        </div>
    </form>

</div>

@endsection
