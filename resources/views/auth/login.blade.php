<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-toekn" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap&_v=20230211214539"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admins/css/style.min.css?_v=20230211214539') }}">
    <title>Админ панель</title>
</head>

<body>
    <div class="wrapper">
        <div class="navigation">
    <div class="logo">
        <img src="{{ asset('admins/img/logo-med.svg') }}" alt="">
        <span>
            Türkmenistanyň <br> lukmanlarynyň jemgyýetçilik <br> guramasynyň komitet
        </span>
    </div>


</div>
        <main class="main">

            <!--====================================
                        LOGIN SECTION
            =====================================-->
            <div class="login">
                <div class="login__body">
                    <form action="{{route('login')}}" method="post" class="form__login">
                        @csrf
                        <div class="login__title">
                            <h1>Авторизация</h1>
                        </div>

                        <div class="form__item">
                            <label>Логин:</label>
                            <input type="text" name="email">
                        </div>

                        <div class="form__item">
                            <label>Пароль:</label>
                            <input type="password" name="password">
                        </div>

                        <div class="form__button">
                            <input type="submit" value="Войти">
                        </div>
                    </form>

                </div>
            </div>

            <!-- link -->
            <!-- ===================================== -->
            <a href="https://st.com.tm/ru" target="_blank" rel="noopener noreferrer" class="st">
                Powered by Sanly tilsimat
            </a>
        </main>
    </div>
    <script src="{{ asset('admins/js/jquery.min.js?_v=20230211214539') }}"></script>
<script src="{{ asset('admins/js/ckeditor.js?_v=20230211214539') }}"></script>
<script src="{{ asset('admins/js/app.min.js?_v=20230211214539') }}"></script>
</body>

</html>
