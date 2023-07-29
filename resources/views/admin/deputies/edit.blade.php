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
        Изменение Депутата
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Изменение Депутата</h1>
    </div>

    <form action="{{ route('deputies.update',$selected_deputy->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Ф.И.О</label>
                <input value="{{ $selected_deputy->fullname_tm }}" type="text" placeholder="" class="inputTxt" name="fullname_tm">
                @error('fullname_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">RU - Ф.И.О</label>
                <input value="{{ $selected_deputy->fullname_ru }}" type="text" placeholder="" class="inputTxt" name="fullname_ru">
                @error('fullname_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">EN - Ф.И.О</label>
                <input value="{{ $selected_deputy->fullname_en }}" type="text" placeholder="" class="inputTxt" name="fullname_en">
                @error('fullname_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">TM - Должность</label>
                <input value="{{ $selected_deputy->position_tm }}" type="text" placeholder="" class="inputTxt" name="position_tm">
                @error('position_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">RU - Должность</label>
                <input value="{{ $selected_deputy->position_ru }}" type="text" placeholder="" class="inputTxt" name="position_ru">
                @error('position_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">EN - Должность</label>
                <input value="{{ $selected_deputy->position_en }}" type="text" placeholder="" class="inputTxt" name="position_en">
                @error('position_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">TM - Год рождения</label>
                <input value="{{ $selected_deputy->birth_year_tm }}" type="text" placeholder="" class="inputTxt" name="birth_year_tm">
                @error('birth_year_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">RU - Год рождения</label>
                <input value="{{ $selected_deputy->birth_year_ru }}" type="text" placeholder="" class="inputTxt" name="birth_year_ru" >
                @error('birth_year_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">EN - Год рождения</label>
                <input value="{{ $selected_deputy->birth_year_en }}" type="text" placeholder="" class="inputTxt" name="birth_year_en" >
                @error('birth_year_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">Email</label>
                <input value="{{ $selected_deputy->email }}" type="email" placeholder="" class="inputTxt" name="email">
                @error('email')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form__item w30">
                <label class="txt">Избирательный округ</label>
                <select name="district_id" id="" class="inputTxt">
                    @foreach ($districts_all as $district)
                        <option value="{{ $district->id }}" @if($district->id == $selected_deputy->election_district_id) selected  @endif>{{ $district->name_tm }}</option>
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
                        <option value="{{ $velayat->id }}" @if($velayat->id == $selected_deputy->velayat_id ) selected @endif>{{ $velayat->name_tm }}</option>
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
                <textarea id="editor-10" name="biography_tm">{{ $selected_deputy->biography_tm }}</textarea>
                @error('biography_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Биография</label>
                <textarea id="editor-11" name="biography_ru">{{ $selected_deputy->biography_ru }}</textarea>
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
                <textarea id="editor-12" name="biography_en">{{ $selected_deputy->biography_en }}</textarea>
                @error('biography_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>


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
        background-color: #fff;
        
        &:focus {
            border: 1.5px solid #7367f0;
        }
    }
</style>

@endsection
