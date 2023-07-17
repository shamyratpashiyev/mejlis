<div class="head">
    <div class="search">
        <!-- <input type="text">
        <img src="{{ asset('admins/img/ico/search.svg') }}"> -->

        <form action="" method="get" style="width: 100%;">
            @csrf
            <input type="text" id="search" name="search">
            <img src="{{ asset('admins/img/ico/search.svg') }}">
        </form>
    </div>

    <div class="user">
        <div class="user__name">
            <span>{{ auth()->user()->name }}</span>
            <span>Admin</span>
        </div>
        <img src="{{ asset('admins/img/ico/ava.svg') }}" alt="">
    </div>

    <div class="logout">
        <form action="{{ route('logout') }}" method="GET" >
            @csrf
            <input type="submit" id="logout" value="">
            <label for="logout">
                <img src="{{ asset('admins/img/ico/logout.svg') }}" alt="">
        </form>
    </div>
</div>
