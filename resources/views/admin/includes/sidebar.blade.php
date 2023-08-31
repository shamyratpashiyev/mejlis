<div class="logo">
    <img src="{{ asset('img/gerb.png') }}" alt="">
    <span>
        Türkmenistanyň <br> Mejlisi
    </span>
</div>


<nav class="menu">

    <div class="menu__link">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-edit.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/edit.svg') }}">
        </div>
        <span>Виды Новостей</span>
    </div>


    <a href="{{ route('news.index') }}" class="menu__link ml {{ str_contains(Route::currentRouteName(),'news.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Новости</span>
    </a>

    <a href="{{ route('news_inter.index') }}" class="menu__link ml {{ str_contains(Route::currentRouteName(),'news_inter.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Международные новости</span>
    </a>

    <a href="{{ route('news_coop.index') }}" class="menu__link ml {{ str_contains(Route::currentRouteName(),'news_coop.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>Международное соотрудничество</span>
    </a>

    <div class="menu__link">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-edit.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/edit.svg') }}">
        </div>
        <span>Туркменистан</span>
    </div>


    <a href="{{ route('tkm_history.index') }}" class="menu__link ml ">
        <div class="icon">
            <img class="img1 circle" src="{{ asset('admins/img/ico/dark-circle.svg') }}">
            <img class="img2 circle" src="{{ asset('admins/img/ico/circle.svg') }}">
        </div>
        <span>История</span>
    </a>

    <a href="{{ route('articles.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'articles.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Выступления и Статьи</span>
    </a>

    <a href="{{ route('mejlis_activities.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'mejlis_activities.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Деятельность Меджлиса</span>
    </a>

    <a href="{{ route('deputies.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'deputies.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Депутаты</span>
    </a>

    <a href="{{ route('committees.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'committees.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Комитеты</span>
    </a>

    <a href="{{ route('convocations.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'convocations.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Созывы</span>
    </a>

    <a href="{{ route('codes.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'codes.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Кодексы</span>
    </a>

    <a href="{{ route('laws.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'laws.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Законы</span>
    </a>

    <a href="{{ route('mejlis_decrees.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'mejlis_decrees.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Постановления Меджлиса</span>
    </a>

    <a href="{{ route('friendship_groups.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'friendship_groups.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Группы Дружбы</span>
    </a>

    <a href="{{ route('election_districts.index') }}" class="menu__link {{ str_contains(Route::currentRouteName(),'election_districts.') ? 'active' : '' }}">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-board.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/board.svg') }}">
        </div>
        <span>Избирательные Округи</span>
    </a>

    <a href="{{ route('settings') }}" class="menu__link @if(Route::currentRouteNamed('settings')) active @endif">
        <div class="icon">
            <img class="img1" src="{{ asset('admins/img/ico/dark-setting.svg') }}">
            <img class="img2" src="{{ asset('admins/img/ico/setting.svg') }}">
        </div>
        <span>Доп. настройки</span>
    </a>
</nav>

<script>
    document.querySelector('.menu__link.active').scrollIntoView();
</script>