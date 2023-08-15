@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('friendship_groups.index') }}">
        Группы Дружбы
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Изменение Группы
    </div>





</div>

@endsection

@section('content')


<div class="content">

    <div class="title">
        <h1 class="title">Изменение Группы</h1>
    </div>

    <form action="{{ route('friendship_groups.update', $selected_group->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input type="text" class="inputTxt" name="title_tm" value="{{ $selected_group->title_tm }}">
                @error('title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input type="text" class="inputTxt" name="title_ru" value="{{ $selected_group->title_ru }}">
                @error('title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input type="text" class="inputTxt" name="title_en" value="{{$selected_group->title_en}}">
                @error('title_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - описание</label>
                <textarea id="editor-10" name="description_tm">{{$selected_group->description_tm}}</textarea>
                @error('description_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-11" name="description_ru">{{ $selected_group->description_ru }}</textarea>
                @error('description_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - описание</label>
                <textarea id="editor-12" name="description_en">{{ $selected_group->description_en }}</textarea>
                @error('description_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата Публикации</label>
                <input type="datetime-local" class="inputDate" name="published_date" value="{{ $selected_group->published_date }}">
                @error('date')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__item alignBot w30" style="row-gap: 20px">
                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="flag_1">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Название:</b> Флаг 1</span>
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 235 x 137px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('flag_1')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-4" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-4" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="flag_2">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Название:</b> Флаг 2</span>
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 235 x 137px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('flag_2')
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
                <a href="{{ route('friendship_groups.index') }}">Отмена</a>
            </div>
        </div>
    </form>

</div>

@endsection
