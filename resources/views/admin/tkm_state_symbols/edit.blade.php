@extends('admin.layouts.main')

@section('crumbs')

<!--====================================
                        CRUMBS SECTION
            =====================================-->
<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg') }}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg') }}">
    <a href="{{ route('tkm_state_symbols.index') }}">
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

    <form action="{{ route('tkm_state_symbols.update', $selected_state_symbol->id) }}" method="POST" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок(Флаг)</label>
                <input type="text" class="inputTxt" name="flag_title_tm" value="{{ $selected_state_symbol->flag_title_tm }}">
                @error('flag_title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок(Флаг)</label>
                <input type="text" class="inputTxt" name="flag_title_ru" value="{{ $selected_state_symbol->flag_title_ru }}">
                @error('flag_title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок(Флаг)</label>
                <input type="text" class="inputTxt" name="flag_title_en" value="{{$selected_state_symbol->flag_title_en}}">
                @error('flag_title_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Текст(Флаг)</label>
                <textarea id="editor-1" name="flag_text_tm">{{$selected_state_symbol->flag_text_tm}}</textarea>
                @error('flag_text_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Текст(Флаг)</label>
                <textarea id="editor-2" name="flag_text_ru">{{ $selected_state_symbol->flag_text_ru }}</textarea>
                @error('flag_text_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Текст(Флаг)</label>
                <textarea id="editor-3" name="flag_text_en">{{ $selected_state_symbol->flag_text_en }}</textarea>
                @error('flag_text_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <div class="form__item alignBot w30">
                <div class="file__box">
                    <label for="file-1" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-1" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="flag_img">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Название:</b> Флаг</span>
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('main_image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Emblem START -->
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок(Эмблема)</label>
                <input type="text" class="inputTxt" name="emblem_title_tm" value="{{ $selected_state_symbol->emblem_title_tm }}">
                @error('emblem_title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок(Эмблема)</label>
                <input type="text" class="inputTxt" name="emblem_title_ru" value="{{ $selected_state_symbol->emblem_title_ru }}">
                @error('emblem_title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок(Эмблема)</label>
                <input type="text" class="inputTxt" name="emblem_title_en" value="{{$selected_state_symbol->emblem_title_en}}">
                @error('emblem_title_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Текст(Эмблема)</label>
                <textarea id="editor-4" name="emblem_text_tm">{{$selected_state_symbol->emblem_text_tm}}</textarea>
                @error('emblem_text_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Текст(Эмблема)</label>
                <textarea id="editor-5" name="emblem_text_ru">{{ $selected_state_symbol->emblem_text_ru }}</textarea>
                @error('emblem_text_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Текст(Эмблема)</label>
                <textarea id="editor-6" name="emblem_text_en">{{ $selected_state_symbol->emblem_text_en }}</textarea>
                @error('emblem_text_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <div class="form__item alignBot w30">
                <div class="file__box">
                    <label for="file-2" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-2" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="emblem_img">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Название:</b> Эмблема</span>
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error('main_image')
                        <p class="err">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <!-- Emblem End -->

        <!-- Anthem Description START -->
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок(Описание Гимна)</label>
                <input type="text" class="inputTxt" name="anthem_description_title_tm" value="{{ $selected_state_symbol->anthem_description_title_tm }}">
                @error('anthem_description_title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок(Описание Гимна)</label>
                <input type="text" class="inputTxt" name="anthem_description_title_ru" value="{{ $selected_state_symbol->anthem_description_title_ru }}">
                @error('anthem_description_title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок(Описание Гимна)</label>
                <input type="text" class="inputTxt" name="anthem_description_title_en" value="{{$selected_state_symbol->anthem_description_title_en}}">
                @error('anthem_description_title_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Текст(Описание Гимна)</label>
                <textarea id="editor-7" name="anthem_description_text_tm">{{$selected_state_symbol->anthem_description_text_tm}}</textarea>
                @error('anthem_description_text_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Текст(Описание Гимна)</label>
                <textarea id="editor-8" name="anthem_description_text_ru">{{ $selected_state_symbol->anthem_description_text_ru }}</textarea>
                @error('anthem_description_text_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Текст(Описание Гимна)</label>
                <textarea id="editor-9" name="anthem_description_text_en">{{ $selected_state_symbol->anthem_description_text_en }}</textarea>
                @error('anthem_description_text_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
            
        </div>
        <!-- Anthem Description END -->


        <!-- Anthem START -->
        <br/><br/>
        <br/><br/>
        <br/><br/>
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок(Гимн)</label>
                <input type="text" class="inputTxt" name="anthem_title_tm" value="{{ $selected_state_symbol->anthem_title_tm }}">
                @error('anthem_title_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок(Гимн)</label>
                <input type="text" class="inputTxt" name="anthem_title_ru" value="{{ $selected_state_symbol->anthem_title_ru }}">
                @error('anthem_title_ru')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок(Гимн)</label>
                <input type="text" class="inputTxt" name="anthem_title_en" value="{{$selected_state_symbol->anthem_title_en}}">
                @error('anthem_title_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - Текст(Гимн)</label>
                <textarea id="editor-10" name="anthem_text_tm">{{$selected_state_symbol->anthem_text_tm}}</textarea>
                @error('anthem_text_tm')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - Текст(Гимн)</label>
                <textarea id="editor-11" name="anthem_text_ru">{{ $selected_state_symbol->anthem_text_ru }}</textarea>
                @error('anthem_text_ru')
                    <p class="err">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - Текст(Гимн)</label>
                <textarea id="editor-12" name="anthem_text_en">{{ $selected_state_symbol->anthem_text_en }}</textarea>
                @error('anthem_text_en')
                    <p class="err">{{$message}}</p>
                @enderror
            </div>
            
        </div>
         <!-- Anthem END -->

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{ route('tkm_state_symbols.index') }}">Отмена</a>
            </div>
        </div>
    </form>

</div>

@endsection
