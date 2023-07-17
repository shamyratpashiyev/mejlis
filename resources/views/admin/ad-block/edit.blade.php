@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('admin.ad-block.index') }}">
        Блок "Объявление"
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Редактирование Объявление
    </div>

</div>
@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Блок "Объявление"</h1>
    </div>

    <form action="{{ route('admin.ad-block.update', $adblock) }}" method="post" class="edit__form">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="tm_title" value="{{ $adblock->tm_title }}">
                @error('tm_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input type="text" class="inputTxt" name="ru_title" value="{{ $adblock->ru_title }}">
                @error('ru_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input type="text" class="inputTxt" name="en_title" value="{{ $adblock->en_title }}">
                @error('en_title')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Содержание</label>
                <textarea name="tm_content">{{ $adblock->tm_content }}</textarea>
                @error('tm_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Содержание</label>
                <textarea name="ru_content">{{ $adblock->ru_content }}</textarea>
                @error('ru_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Содержание</label>
                <textarea name="en_content">{{ $adblock->en_content }}</textarea>
                @error('en_content')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">Ссылка</label>
                <input type="text" placeholder="https://www.google.ru/" class="inputTxt" name="link" value="{{ $adblock->link }}">
                @error('link')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            {{-- @dd($adblock->date_start) --}}
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата начало</label>
                <input type="datetime-local" class="inputDate" name="date_start" value="{{ $adblock->date_start }}">
                @error('date_start')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата окончания</label>
                <input type="datetime-local" class="inputDate" name="date_end" value="{{ $adblock->date_end }}">
                @error('date_end')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('admin.ad-block.index') }}">Отмена</a>
            </div>
        </div>
    </form>

    @if (session('success'))
    <div class="row">
        {{session('success')}}
    </div>
    @endif
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
