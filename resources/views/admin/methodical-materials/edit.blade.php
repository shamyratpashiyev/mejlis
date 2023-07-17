@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">


    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <a href="{{route('admin.metodical-material.index')}}">
        Методические материалы
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Изменение Методических материалов
    </div>



</div>
@endsection

@section('content')

<div class="content">

    <div class="title">
        <h1 class="title">Изменение Методических материалов</h1>
    </div>

    <form action="{{route('admin.metodical-material.update', $metodical)}}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input type="text" class="inputTxt" name="tm_title" value="{{$metodical->tm_title}}">
                @error("tm_title")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input type="text" class="inputTxt" name="ru_title" value="{{$metodical->ru_title}}">
                @error("ru_title")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input type="text" class="inputTxt" name="en_title" value="{{$metodical->en_title}}">
                @error("en_title")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Имя автора</label>
                <input type="text" class="inputTxt" name="tm_author" value="{{$metodical->tm_author}}">
                @error("tm_author")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Имя автора</label>
                <input type="text" class="inputTxt" name="ru_author" value="{{$metodical->ru_author}}">
                @error("ru_author")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Имя автора</label>
                <input type="text" class="inputTxt" name="en_author" value="{{$metodical->en_author}}">
                @error("en_author")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">TM - описание</label>
                <textarea id="editor-13" name="tm_content">{{$metodical->tm_content}}</textarea>
                @error("tm_content")
                <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-14" name="ru_content">{{$metodical->tm_content}}</textarea>
                @error("ru_content")
               <p class="err">{{$message}}</p>
                    @enderror
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">EN - описание</label>
                <textarea id="editor-15" name="en_content">{{$metodical->tm_content}}</textarea>
                @error("en_content")
                 <p class="err">{{$message}}</p>
                    @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <div class="column">
                    <!-- form__item -->
                    {{-- class="custom-select" --}}
                    <div class="form__item w60">
                        <label for="categories" class=" txt">Категория комитета</label>
                        <div class="form__select__box">
                            <select name="category_id" id="categories" class="form-control">
                                <option value="0">все</option>
                                @foreach ($categories as $cat)
                                <option {{$cat->id === $metodical->category->id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->ru_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error("category_id")
                         <p class="err">{{$message}}</p>
                            @enderror
                    </div>

                    <!-- form__item -->
                    <div class="form__item w60">
                        <label class="txt">Под категория комитета</label>
                        <div class="form__select__box">
                            <select name="subCategory_id" id="sub" class="form-control">
                                <option value="0">все</option>

                                @foreach ($subCategories as $sc)
                                <option @if($metodical->subCategory) {{$metodical->subCategory->id == $sc->id ? 'selected' : ""}} @endif value="{{$sc->id}}">{{$sc->ru_title}}</option>
                                @endforeach

                            </select>
                        </div>
                        @error("subCategory_id")
                         <p class="err">{{$message}}</p>
                            @enderror
                    </div>

                    <!-- form__item -->
                    <div class="form__item w40">
                        <label class="txt">Дата</label>
                        <input type="datetime-local" class="inputDate" name="date" value="{{$metodical->date}}">
                        @error("date")
                         <p class="err">{{$message}}</p>
                            @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item alignBot w30">
                <span class="label">Фото</span>
                <div class="file__box">
                    <label for="file-3" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-3" class="inputFile" accept="image/png, image/jpg, image/jpeg" name="image">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> jpeg, jpg, png</span>
                            <span><b>Размер:</b> 705 x 470px</span>
                            <span><b>Соотношение сторон:</b> 3/2</span>
                        </div>
                    </div>
                    @error("image")
                     <p class="err">{{$message}}</p>
                        @enderror
                </div>
            </div>

            <!-- form__item -->
            <div class="form__item alignBot w30">
                <span class="label">Файл для скачивания</span>
                <div class="file__box">
                    <label for="file-4" class="file">
                        Прикрепить файл
                        <img src="{{ asset('admins/img/ico/link.svg') }}">
                    </label>
                    <input type="file" id="file-4" class="inputFile" name="file">
                    <!-- HELP -->
                    <div class="help">
                        <div class="help__icon">?</div>
                        <div class="help__content">
                            <span><b>Формат:</b> doc, docx, pdf, zip</span>
                            <span><b>Размер:</b> До 20 мб</span>
                        </div>
                    </div>
                    @error("file")
                     <p class="err">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- ROW  -->
        <div class="row">
            <!-- form__button -->
            <div class="form__button">
                <input type="submit" value="Сохранить">
                <a href="{{route('admin.metodical-material.index')}}">Отмена</a>
            </div>
        </div>
    </form>


    <!-- scienceArticles_edit -->
    <!-- ==================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script type="text/javascript">
        $("#categories").change(function() {
            var category_id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(category_id);

            $.ajax({
                url: "{{ route('selectsub') }}",
                method: 'POST',
                data: {
                    category_id: category_id,
                    _token: token
                },
                success: function(data) {
                    $("#sub").html('');
                    $("#sub").html(data.options);
                }
            });
        });
    </script>

</div>

@endsection
