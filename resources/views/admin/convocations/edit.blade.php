@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('convocations.index') }}">
        Созывы
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Изменение Созыва
    </div>





</div>

@endsection

@section('content')


<div class="content">

    <div class="title">
        <h1 class="title">Изменение Созыва</h1>
    </div>

    <form action="{{ route('convocations.update', $selected_convocation->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="name_tm" value="{{ $selected_convocation->name_tm }}">
                @error('name_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="name_ru" value="{{ $selected_convocation->name_ru }}">
                @error('name_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="name_en" value="{{ $selected_convocation->name_en }}">
                @error('name_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">Номер Созыва</label>
                <input type="text" class="inputTxt" name="convocation_number" value="{{ $selected_convocation->convocation_number }}">
                @error('convocation_number')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('convocations.index') }}">Отмена</a>
            </div>
        </div>

    </form>

</div>

@endsection
