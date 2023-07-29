<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap&_v=20230211214539" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <title>Админ панель</title>

</head>

<body>
    <div class="wrapper">
        <div class="navigation">

            @include('admin.includes.sidebar')

        </div>
        <main class="main">
            <!--====================================
                        HEAD SECTION
            =====================================-->
            @include('admin.includes.navbar')

            <!--====================================
                        CRUMBS SECTION
            =====================================-->
            @yield('crumbs')
            <!--====================================
                        PAGE SECTION
            =====================================-->
            @yield('content')
            <!-- link -->
            <!-- ===================================== -->
            <a href="https://st.com.tm/ru" target="_blank" rel="noopener noreferrer" class="st">Powered by Sanly tilsimat</a>
        </main>
    </div>
    <script src="{{ asset('admins/js/jquery.min.js?_v=20230211214539') }}"></script>
    <script src="{{ asset('admins/js/ckeditor.js?_v=20230211214539') }}"></script>
    <script src="{{ asset('admins/js/admin.js') }}"></script>
</body>

</html>