@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="route('admin.committee.category.index')">
        Комитеты
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Категория
    </div>


</div>

@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Изменение категории комитета</h1>
    </div>

    <form action="{{route('admin.committee.category.update', $category)}}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="tm_title" value="{{$category->tm_title}}">
                @error('tm_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input type="text" class="inputTxt" name="ru_title" value="{{$category->ru_title}}">
                @error('ru_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input type="text" class="inputTxt" name="en_title" value="{{$category->en_title}}">
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
                <textarea id="editor-4" name="tm_content">{{$category->tm_content}}</textarea>
                @error('tm_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-5" name="ru_content">{{$category->ru_content}}</textarea>
                @error('ru_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - описание</label>
                <textarea id="editor-6" name="en_content">{{$category->en_content}}</textarea>
                @error('en_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>



        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item alignBot w45">
                <div class="file__box">
                    <div class="form__item">
                        <label class="txt">Цветной логотип</label>
                        <div class="txtBox">
                            <label for="file-1" class="file">
                                Прикрепить файл
                                <img src="{{ asset('admins/img/ico/link.svg') }}">
                            </label>
                            <input type="file" id="file-1" class="inputFile" accept="image/svg+xml, image/jpg, image/jpeg" name="logo_color">
                            <!-- HELP -->
                            <div class="help">
                                <div class="help__icon">?</div>
                                <div class="help__content">
                                    <span><b>Формат:</b> png, svg</span>
                                </div>
                            </div>
                        </div>
                        @error('logo_color')
                        <p class="err">{{$message}}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="form__item alignBot w45">
                <div class="file__box">
                    <div class="form__item">
                        <label class="txt">Темный логотип</label>
                        <div class="txtBox">
                            <label for="file-2" class="file">
                                Прикрепить файл
                                <img src="{{ asset('admins/img/ico/link.svg') }}">
                            </label>
                            <input type="file" id="file-2" class="inputFile" accept="image/svg+xml, image/jpg, image/jpeg" name="logo_dark">
                            <!-- HELP -->
                            <div class="help">
                                <div class="help__icon">?</div>
                                <div class="help__content">
                                    <span><b>Формат:</b> png, svg</span>
                                </div>
                            </div>
                        </div>
                        @error('logo_dark')
                        <p class="err">{{$message}}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="form__item alignBot w45">
                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" accept="image/png image/jpg, image/jpeg" name="image">
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

            <div class="form__item w30">
                <label class="txt">Нумерация</label>
                <input type="number" placeholder="1" class="inputTxt" name="num" value="{{$category->num}}">
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
                <a href="{{route('admin.committee.category.index')}}">Отмена</a>
            </div>
        </div>
    </form>


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
