<div class="logo">
    <img src="{{ asset('admins/img/logo-med.svg') }}" alt="">
    <span>
        Türkmenistanyň <br> lukmanlarynyň jemgyýetçilik <br> guramasynyň komitet
    </span>
</div>


<nav class="menu">

    <a href="#" class="{{request()->path() == 'admin' || str_contains(request()->path(), 'headers') || str_contains(request()->path(), 'contacts') || str_contains(request()->path(), 'aboutus') || str_contains(request()->path(), 'photoblocks') || str_contains(request()->path(), 'counters')   ? ' menu__link active' : 'menu__link'}} ">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-home.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/home.svg') }}">
        </div>
        <span>Главная страница</span>
    </a>

    <div class="{{str_contains(request()->path(), 'committees') || (str_contains(request()->path(), 'search') && (session('search') == 'categories' || session('search') == 'subCategories' )) ? ' menu__link active' : 'menu__link'}} ">
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
        <span>Добавление</span>
    </div>


    <a href="#" class="{{str_contains(request()->path(), 'news') || (str_contains(request()->path(), 'search') &&   session('search') == 'news') ? ' menu__link ml active' : 'menu__link ml'}}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Новости</span>
    </a>

    <a href="#" class="{{str_contains(request()->path(), 'metodical-materials') || (str_contains(request()->path(), 'search') && session('search') == 'metodical') ? ' menu__link ml active' : 'menu__link ml'}} ">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Метод.материалы</span>
    </a>

    <a href="#" class="{{str_contains(request()->path(), 'science-articles') || (str_contains(request()->path(), 'search') && session('search') == 'science') ? ' menu__link ml active' : 'menu__link ml'}}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Научные статьи</span>
    </a>

    <a href="#" class="{{str_contains(request()->path(), 'ad-block') || (str_contains(request()->path(), 'search') && session('search') == 'block') ? ' menu__link ml active' : 'menu__link ml'}}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Блок "Объявление"</span>
    </a>

    <a href="#" class="{{str_contains(request()->path(), 'settings' ) ? ' menu__link active' : 'menu__link'}}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Доп. настройки</span>
    </a>
</nav>