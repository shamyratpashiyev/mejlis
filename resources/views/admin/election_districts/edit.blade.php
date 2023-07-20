@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('election_districts.index') }}">
        Избирательные Округи
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Изменение Округа
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Изменение Округа</h1>
    </div>

    <form action="{{ route('election_districts.update', $selected_district->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input value="{{ $selected_district->name_tm }}" type="text" placeholder="" class="inputTxt" name="name_tm">
                @error('name_tm')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input value="{{ $selected_district->name_ru }}" type="text" placeholder="" class="inputTxt" name="name_ru">
                @error('name_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input value="{{ $selected_district->name_en}}" type="text" placeholder="" class="inputTxt" name="name_en">
                @error('name_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">Номер округа</label>
                <input value="{{ $selected_district->district_number }}" type="text" placeholder="" class="inputTxt" name="district_number">
                @error('district_number')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - границы</label>
                <textarea id="editor-10" name="borders_tm">{{ $selected_district->borders_tm }}</textarea>
                @error('borders_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - границы</label>
                <textarea id="editor-11" name="borders_ru">{{ $selected_district->borders_ru }}</textarea>
                @error('borders_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - границы</label>
                <textarea id="editor-12" name="borders_en">{{ $selected_district->borders_en }}</textarea>
                @error('borders_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('election_districts.index') }}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>


@endsection
