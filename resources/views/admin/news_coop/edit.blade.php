@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('news.index') }}">
        Новости
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <div>
        Изменение новости
    </div>





</div>

@endsection

@section('content')


<div class="content">

    <div class="title">
        <h1 class="title">Изменение Новости</h1>
    </div>

    <form action="{{ route('news_coop.update', $selected_news->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input type="text" class="inputTxt" name="title_tm" value="{{ $selected_news->title_tm }}">
                @error('title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input type="text" class="inputTxt" name="title_ru" value="{{ $selected_news->title_ru }}">
                @error('title_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input type="text" class="inputTxt" name="title_en" value="{{$selected_news->title_en}}">
                @error('title_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - описание</label>
                <textarea id="editor-10" name="description_tm">{{$selected_news->description_tm}}</textarea>
                @error('description_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-11" name="description_ru">{{ $selected_news->description_ru }}</textarea>
                @error('description_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - описание</label>
                <textarea id="editor-12" name="description_en">{{ $selected_news->description_en }}</textarea>
                @error('description_en')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w15">
                <label class="txt">Дата</label>
                <input type="date" class="inputDate" name="event_date" value="{{ date('Y-m-d',strtotime($selected_news->event_date)) }}">
                @error('date')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item alignBot w30" style="row-gap: 20px;">
                <div class="file__box">
                    <label for="file-1" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-1" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_1">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-2" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-2" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_2">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_3">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-4" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-4" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_4">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-5" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-5" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_5">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>

                <div class="file__box">
                    <label for="file-6" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-6" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image_6">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('news.index') }}">Отмена</a>
            </div>
        </div>
    </form>

</div>

@endsection
