@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('mejlis_activities.index') }}">
        Деятельность Меджлиса
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Добавление Деятельности
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Добавление Деятельности</h1>
    </div>

    <form action="{{ route('mejlis_activities.store') }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input value="{{ old('title_tm') }}" type="text" placeholder="" class="inputTxt" name="title_tm">
                @error('title_tm')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input value="{{ old('title_ru') }}" type="text" placeholder="" class="inputTxt" name="title_ru">
                @error('title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input value="{{old('title_en')}}" type="text" placeholder="" class="inputTxt" name="title_en">
                @error('title_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - описание</label>
                <textarea id="editor-10" name="description_tm">{{ old('description_tm') }}</textarea>
                @error('description_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-11" name="description_ru">{{ old('description_ru') }}</textarea>
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
                <textarea id="editor-12" name="description_en">{{ old('description_en') }}</textarea>
                @error('description_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата</label>
                <input type="datetime-local" class="inputDate" name="event_date">
                @error('event_date')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('mejlis_activities.index') }}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>


@endsection
