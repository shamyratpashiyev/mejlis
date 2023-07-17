@extends('admin.layouts.main')

@section('crumbs')

            <div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('admin.main') }}">
        Главная страница
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Рекламный блок
    </div>

</div>
@endsection

@section('content')

            <div class="content">

    <div class="title">
        <h1 class="title">Рекламный блок</h1>
    </div>


    <!-- SETTINGS -->
    <!-- ======== -->


    <!-- HEADER-EDIT -->
    <!-- =========== -->


    <!-- photoBlock_edit -->
    <!-- =============== -->


    <!-- counter_edit -->
    <!-- ============ -->


    <!-- addBlock_edit -->
    <!-- ============= -->

    <form action="{{ route('admin.main.adblock.update', $adblocks) }}" method="post" class="edit__form">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название</label>
                <input type="text" class="inputTxt" name="tm_title" value="{{ $adblocks->tm_title }}">
                @error('tm_title')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input type="text" class="inputTxt" name="ru_title" value="{{ $adblocks->ru_title }}">
                @error('ru_title')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input type="text" class="inputTxt" name="en_title" value="{{ $adblocks->en_title }}">
                @error('en_title')
                <p>{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Содержание</label>
                <textarea name="tm_content">{{ $adblocks->tm_content }}</textarea>
                 @error('tm_content')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Содержание</label>
                <textarea name="ru_content">{{ $adblocks->ru_content }}</textarea>
                @error('ru_content')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Содержание</label>
                <textarea name="en_content">{{ $adblocks->en_content }}</textarea>
                @error('en_content')
                <p>{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">Ссылка</label>
                <input type="text" class="inputTxt" name="link" value="{{ $adblocks->link }}">
                @error('link')
                <p>{{$message}}</p>
                @enderror
            </div>

            {{-- @dd($adblocks->date_start) --}}
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата начало</label>
                <input type="datetime-local" class="inputDate" name="date_start" value="{{ $adblocks->date_start }}">
                @error('date_start')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата окончания</label>
                <input type="datetime-local" class="inputDate" name="date_end" value="{{ $adblocks->date_end }}">
                @error('date_end')
                <p>{{$message}}</p>
                @enderror
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
