@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('committees.index') }}">
        Комитеты
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Добавление Комитета
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Добавление Комитета</h1>
    </div>

    <form action="{{ route('committees.store') }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">Название</label>
                <input value="{{ old('name') }}" type="text" placeholder="" class="inputTxt" name="name">
                @error('name')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        {{-- <div class="row">
            <div class="form__item w30">
                <label class="txt">TM - Должность</label>
                <input value="{{ old('position_tm') }}" type="text" placeholder="" class="inputTxt" name="position_tm">
                @error('position_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">RU - Должность</label>
                <input value="{{ old('position_ru') }}" type="text" placeholder="" class="inputTxt" name="position_ru">
                @error('position_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">EN - Должность</label>
                <input value="{{ old('position_en') }}" type="text" placeholder="" class="inputTxt" name="position_en">
                @error('position_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}


        <!-- ROW  -->
        {{-- <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Биография</label>
                <textarea id="editor-10" name="biography_tm">{{ old('biography_tm') }}</textarea>
                @error('biography_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Биография</label>
                <textarea id="editor-11" name="biography_ru">{{ old('biography_ru') }}</textarea>
                @error('biography_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <!-- ROW  -->
        {{-- <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Биография</label>
                <textarea id="editor-12" name="biography_en">{{ old('biography_en') }}</textarea>
                @error('biography_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <!-- ROW  -->
        {{-- <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата</label>
                <input type="datetime-local" class="inputDate" name="event_date">
                @error('event_date')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div> --}}

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('committees.index') }}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>


@endsection
