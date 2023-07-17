@extends('admin.layouts.main')

@section('crumbs')
            <div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Доп. настройки
    </div>
</div>
@endsection

@section('content')
            <div class="content">


    <!-- SETTINGS -->
    <!-- ======== -->

    <form action="{{ route('admin.setting.change', $setting) }}" method="post" class="settings__form">
        @csrf
        @method('patch')
        <div class="title">
            <h1 class="title">Языки</h1>
        </div>

        <div class="form__item">
            <span class="label">Туркменский</span>
            <label for="tm_checkbox" class="checkbox__label tm_checkbox_label"></label>
            <input type="checkbox" name="tm" id="tm_checkbox" class="settingsCheckbox" {{ $setting->tm ? 'checked' : ''}}>
        </div>

        <div class=" form__item">
            <span class="label">Русский</span>
            <label for="ru_checkbox" class="checkbox__label ru_checkbox_label"></label>
            <input type="checkbox" name="ru" id="ru_checkbox" class="settingsCheckbox" {{ $setting->ru ? 'checked' : ''}}>
        </div>

        <div class="form__item">
            <span class="label">Английский</span>
            <label for="en_checkbox" class="checkbox__label en_checkbox_label"></label>
            <input type="checkbox" name="en" id="en_checkbox" class="settingsCheckbox" {{ $setting->en ? 'checked' : ''}}>
        </div>

        <div class="blue__border"></div>

        <div class="title">
            <h1 class="title">Счетчик</h1>
        </div>

        <div class="form__item">
            <span class="label counter">Счетчик статистики</span>
            <label for="counter_checkbox" class="checkbox__label counter_checkbox_label"></label>
            <input type="checkbox" name="counter" id="counter_checkbox" class="settingsCheckbox" {{ $setting->counter ? 'checked' : ''}}>
        </div>

        <div class="form__button">
            <input type="submit" value="Сохранить">
            <a href="{{ route('admin.main') }}">Отмена</a>
        </div>
    </form>


    <!-- HEADER-EDIT -->
    <!-- =========== -->


    <!-- photoBlock_edit -->
    <!-- =============== -->


    <!-- counter_edit -->
    <!-- ============ -->


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
