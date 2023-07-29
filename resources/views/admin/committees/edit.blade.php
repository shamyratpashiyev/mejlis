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
        Изменение Комитета
    </div>





</div>


@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Изменение Комитета</h1>
    </div>

    <form action="{{ route('committees.update', $selected_committee->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">ТМ - Название</label>
                <input value="{{ $selected_committee->name_tm }}" type="text" placeholder="" class="inputTxt" name="name_tm">
                @error('name_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">RU - Название</label>
                <input value="{{ $selected_committee->name_ru }}" type="text" placeholder="" class="inputTxt" name="name_ru">
                @error('name_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">EN - Название</label>
                <input value="{{ $selected_committee->name_en }}" type="text" placeholder="" class="inputTxt" name="name_en">
                @error('name_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form__item w30">
                <label class="txt">Глава комитета</label>
                <select name="committee_head_id" id="">
                    @foreach ($deputies_all as $deputy)
                        <option value="{{ $deputy->id }}" @if($selected_committee->committee_head_id == $deputy->id) selected @endif>{{ $deputy->fullname_tm }}</option>
                    @endforeach
                </select>
                @error('name')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <div class="form__item w30">
                <label class="txt">Члены комитета</label>
                <select name="committee_members_id[]" id="" multiple size="10" style="height: max-content">
                    @foreach ($deputies_all as $deputy)
                        <option value="{{ $deputy->id }}" @if(in_array($deputy->id, $selected_committee->deputies->pluck('id')->toArray())) selected @endif>{{ $deputy->fullname_tm }}</option>
                    @endforeach
                </select>
                @error('name')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

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
