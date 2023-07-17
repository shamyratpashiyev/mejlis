@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">

    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <a href="{{route('admin.science-article.index')}}">
        Научные статьи
    </a>

    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Добавление научной статьи
    </div>

</div>
@endsection

@section('content')


<div class="content">
    <div class="title">
        <h1 class="title">Добавление научной статьи</h1>
    </div>

    <form action="{{route('admin.science-article.store')}}" method="post" class="edit__form" enctype="multipart/form-data">
        @csrf
        <!-- ROW  -->
        <div class="row">
            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">TM - Заголовок</label>
                <input value="{{old('tm_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="tm_title">
                @error("tm_title")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Заголовок</label>
                <input value="{{old('ru_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="ru_title">
                @error("ru_title")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Заголовок</label>
                <input value="{{old('en_title')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="en_title">
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
                <input value="{{old('tm_author')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="tm_author">
                @error("tm_author")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">RU - Имя автора</label>
                <input value="{{old('ru_author')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="ru_author">
                @error("ru_author")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w30">
                <label class="txt">EN - Имя автора</label>
                <input value="{{old('en_author')}}" type="text" placeholder="Lorem ipsum dolor sit amet consectetur" class="inputTxt" name="en_author">
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
                <textarea id="editor-13" name="tm_content">{{old('tm_content')}}</textarea>
                @error("tm_content")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <label class="txt">RU - описание</label>
                <textarea id="editor-14" name="ru_content">{{old('ru_content')}}</textarea>
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
                <textarea id="editor-15" name="en_content">{{old('en_content')}}</textarea>
                @error("en_content")
                <p class="err">{{$message}}</p>
                @enderror
            </div>

            <!-- form__item -->
            <div class="form__item w45">
                <div class="column">
                    <!-- form__item  -->
                    {{-- class="custom-select" --}}
                    <div class="form__item w60">
                        <label for="categories" class="txt">Категория комитета</label>
                        <div class="form__select__box">
                            <select name="category_id" id="categories" class="form-control">
                                <option value="">все</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->ru_title}}</option>
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
                                <option value="">все</option>
                            </select>
                        </div>
                        @error("subCategory_id")
                        <p class="err">{{$message}}</p>
                        @enderror
                    </div>




                    <!-- form__item -->
                    <div class="form__item w40">
                        <label class="txt">Дата</label>
                        <input type="datetime-local" class="inputDate" name="date">
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
                <a href="{{route('admin.science-article.index')}}">Отмена</a>
            </div>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script type="text/javascript">
    $("#categories").change(function() {
        var category_id = $(this).val();
        var token = $("input[name='_token']").val();
        console.log(category_id);

        $.ajax({
            url: "{{ route('selectsub.articles') }}",
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
@endsection
