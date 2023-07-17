@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{route('admin.main')}}">
        Главная страница
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Главное фото под шапкой
    </div>

</div>
@endsection


@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Главное фото под шапкой</h1>
    </div>




    <form action="{{ route('admin.main.photoblock.update', $photoblock) }}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - заголовок</label>
                <div class="txtBox">
                    <input type="text" name="tm_title" class="inputTxt" value="{{ $photoblock->tm_title }}">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 55 символов</span>
                        </div>
                    </div>
                </div>
                @error('tm_title')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <div class="txtBox">
                    <input type="text" name="ru_title" class="inputTxt" value="{{ $photoblock->ru_title }}">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 55 символов</span>
                        </div>
                    </div>
                </div>
                @error('ru_title')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <div class="txtBox">
                    <input type="text" name="en_title" class="inputTxt" value="{{ $photoblock->en_title }}">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 55 символов</span>
                        </div>
                    </div>
                </div>
                @error('en_title')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Содержание</label>
                <div class="txtBox">
                    <textarea name="tm_content">{{ $photoblock->tm_content }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 200 символов</span>
                        </div>
                    </div>
                </div>
                @error('tm_content')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Содержание</label>
                <div class="txtBox">
                    <textarea name="ru_content">{{ $photoblock->ru_content }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 200 символов</span>
                        </div>
                    </div>
                </div>
                @error('ru_content')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Содержание</label>
                <div class="txtBox">
                    <textarea name="en_content">{{ $photoblock->en_content }}</textarea>
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span>Ограничение: 200 символов</span>
                        </div>
                    </div>
                </div>
                @error('en_content')
                <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" name="image" accept="image/png, image/jpg, image/jpeg">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> png, jpeg, jpg</span>
                            <span><b>Размер:</b> 1920 x 720px</span>
                        </div>
                    </div>
                    @error('image')
                    <p class="err">{{ $message }}</p>
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
    <!-- counter_edit -->
    <!-- ============ -->


    <!-- addBlock_edit -->
    <!-- ============= -->


    <!-- aboutUs_edit -->
    <!-- ============ -->


    <!-- contacts_edit -->
    <!-- ============= -->



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
