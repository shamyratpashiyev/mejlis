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
        Блок "Счетчик статистики"
    </div>

</div>
@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Блок "Счетчик статистики"</h1>
    </div>


    <form action="{{ route('admin.main.counter.update', $counter) }}" method="post" class="edit__form">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Число №1</label>
                <input type="text" class="inputTxt" name="num_one" value="{{ $counter->num_one }}">
                @error('num_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Число №2</label>
                <input type="text" class="inputTxt" name="num_two" value="{{ $counter->num_two }}">
                @error('num_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Число №3</label>
                <input type="text" class="inputTxt" name="num_three" value="{{ $counter->num_three }}">
                @error('num_three')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Число №4</label>
                <input type="text" class="inputTxt" name="num_four" value="{{ $counter->num_four }}">
                @error('num_four')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название №1</label>
                <input type="text" class="inputTxt" name="tm_title_one" value="{{ $counter->tm_title_one }}">
                @error('tm_title_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название №1</label>
                <input type="text" class="inputTxt" name="ru_title_one" value="{{ $counter->ru_title_one }}">
                @error('ru_title_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название №1</label>
                <input type="text" class="inputTxt" name="en_title_one" value="{{ $counter->en_title_one }}">
                @error('en_title_one')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название №2</label>
                <input type="text" class="inputTxt" name="tm_title_two" value="{{ $counter->tm_title_two }}">
                @error('tm_title_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название №2</label>
                <input type="text" class="inputTxt" name="ru_title_two" value="{{ $counter->ru_title_two }}">
                @error('ru_title_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название №2</label>
                <input type="text" class="inputTxt" name="en_title_two" value="{{ $counter->en_title_two }}">
                @error('en_title_two')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название №3</label>
                <input type="text" class="inputTxt" name="tm_title_three" value="{{ $counter->tm_title_three }}">
                @error('tm_title_three')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название №3</label>
                <input type="text" class="inputTxt" name="ru_title_three" value="{{ $counter->ru_title_three }}">
                @error('ru_title_three')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название №3</label>
                <input type="text" class="inputTxt" name="en_title_three" value="{{ $counter->en_title_three }}">
                @error('en_title_three')
                <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Название №4</label>
                <input type="text" class="inputTxt" name="tm_title_four" value="{{ $counter->tm_title_four }}">
                @error('tm_title_four')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Название №4</label>
                <input type="text" class="inputTxt" name="ru_title_four" value="{{ $counter->ru_title_four }}">
                @error('ru_title_four')
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Название №4</label>
                <input type="text" class="inputTxt" name="en_title_four" value="{{ $counter->en_title_four }}">
                @error('en_title_four')
                <p class="err">{{$message}}</p>
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