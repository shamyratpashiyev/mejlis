@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('mejlis_decrees.index') }}">
        Постановления Меджлиса
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Изменение Постановления
    </div>





</div>

@endsection

@section('content')


<div class="content">

    <div class="title">
        <h1 class="title">Изменение Постановления</h1>
    </div>

    <form action="{{ route('mejlis_decrees.update', $selected_decree->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input type="text" class="inputTxt" name="title_tm" value="{{ $selected_decree->title_tm }}">
                @error('title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input type="text" class="inputTxt" name="title_ru" value="{{ $selected_decree->title_ru }}">
                @error('title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input type="text" class="inputTxt" name="title_en" value="{{$selected_decree->title_en}}">
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
                <textarea id="editor-10" name="description_tm">{{$selected_decree->description_tm}}</textarea>
                @error('description_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-11" name="description_ru">{{ $selected_decree->description_ru }}</textarea>
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
                <textarea id="editor-12" name="description_en">{{ $selected_decree->description_en }}</textarea>
                @error('description_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата</label>
                <input type="datetime-local" class="inputDate" name="published_date" value="{{ $selected_decree->published_date }}">
                @error('date')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('mejlis_decrees.index') }}">Отмена</a>
            </div>
        </div>
    </form>

</div>

@endsection
