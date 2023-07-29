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
            <div class="form__item w30">
                <label class="txt">Номер Созыва</label>
                <input type="text" class="inputTxt" name="number" value="{{ $selected_convocation->number }}">
                @error('number')
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
