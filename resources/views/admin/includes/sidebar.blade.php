<div class="logo">
    <img src="{{ asset('admins/img/logo-med.svg') }}" alt="">
    <span>
        Türkmenistanyň <br> lukmanlarynyň jemgyýetçilik <br> guramasynyň komitet
    </span>
</div>


<nav class="menu">

    <a href="{{ route('admin_main') }}" class="menu__link {{ (Route::currentRouteName() == 'admin_main' ? 'active' : '') }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-home.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/home.svg') }}">
        </div>
        <span>Главная страница </span>
    </a>

    <div class="menu__link">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Комитеты</span>
    </div>

    <a href="#" class="{{str_contains(request()->path(), 'categories') || (str_contains(request()->path(), 'search') && session('search') == 'categories') ? ' menu__link ml active' : 'menu__link ml'}} ">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Категории</span>
    </a>

    <a href="#" class="{{str_contains(request()->path(), 'subCategories') || (str_contains(request()->path(), 'search') && session('search') == 'subCategories') ? ' menu__link ml active' : 'menu__link ml'}} ">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Под категории</span>
    </a>

    <div class="{{str_contains(request()->path(), 'add') ||( str_contains(request()->path(), 'search') && (session('search') == 'news' || session('search') == 'metodical' || session('search') == 'science' || session('search') == 'block')) ? ' menu__link active' : 'menu__link'}} ">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-edit.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/edit.svg') }}">
        </div>
        <span>Виды Новостей</span>
    </div>


    <a href="{{ route('news.index') }}" class="menu__link ml {{ (Route::currentRouteName() == 'news.index' ? 'active' : '') }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Новости</span>
    </a>

    <a href="{{ route('news_inter.index') }}" class="menu__link ml {{ (Route::currentRouteName() == 'news_inter.index' ? 'active' : '') }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Международные новости</span>
    </a>

    <a href="{{ route('news_coop.index') }}" class="menu__link ml {{ (Route::currentRouteName() == 'news_coop.index' ? 'active' : '') }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Международное соотрудничество</span>
    </a>

    <a href="{{ route('articles.index') }}" class="menu__link {{ (Route::currentRouteName() == 'articles.index' ? 'active' : '') }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Выступления и Статьи</span>
    </a>

    <a href="#" class="menu__link">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Доп. настройки</span>
    </a>
</nav>