@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('deputies.index') }}">
        Депутаты
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Добавление Депутата
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Добавление Депутата</h1>
    </div>

    <form action="{{ route('deputies.store') }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">Ф.И.О</label>
                <input value="{{ old('full_name') }}" type="text" placeholder="" class="inputTxt" name="full_name">
                @error('full_name')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">Email</label>
                <input value="{{ old('email') }}" type="email" placeholder="" class="inputTxt" name="email">
                @error('email')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row">
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
        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">Избирательный округ</label>
                <select name="district_id" id="" class="inputTxt">
                    @foreach ($districts_all as $district)
                        <option value="{{ $district->id }}">{{ $district->name_tm }}</option>
                    @endforeach
                </select>
                @error('position_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">Велаят</label>
                <select name="velayat_id" id="" class="inputTxt">
                    @foreach ($velayats_all as $velayat)
                        <option value="{{ $velayat->id }}">{{ $velayat->name_tm }}</option>
                    @endforeach
                </select>
                @error('position_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
            
        </div>


        <!-- ROW  -->
        <div class="row">
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
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Биография</label>
                <textarea id="editor-12" name="biography_en">{{ old('biography_en') }}</textarea>
                @error('biography_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

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
                <a href="{{ route('deputies.index') }}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- methodicalMaterials_edit -->
    <!-- ======================== -->


    <!-- scienceArticles_edit -->
    <!-- ==================== -->

</div>

<style>
     select{
        width: 100%;
        height: 40px;
        padding: 0px 10px;
        border: 1.5px solid #e7e7e7;
        border-radius: 10px;
        transition: 0.2s;
        box-shadow: 4px 15px 15px rgba(191, 191, 191, 0.2);
        
        &:focus {
            border: 1.5px solid #7367f0;
        }
    }
</style>

@endsection
