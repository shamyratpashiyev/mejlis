@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Депутаты
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Депутаты</h1>


        <a href="{{ route('deputies.create') }}">
            Добавить
        </a>

    </div>

    <!--====================================
                    LIST
    =====================================-->


    <div class="list__head">
        <div class="name">
            <div class="w5">№</div>
            <div class="w35">Название</div>
            <div class="w35">Должность</div>
            <div class="date w15">Год Рождения</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        <!-- list__item -->
        @foreach ($deputies_all as $deputy)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $deputy->id }}</div>
                <div class="w35">{{ $deputy->fullname_tm }}</div>
                <div class="w35">
                    {{ $deputy->position_tm }}
                </div>
                <div class="date w15">{{ $deputy->birth_year_tm }}</div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('deputies.edit', $deputy->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('deputies.destroy', $deputy->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $deputy->id }}" value="">
                    <label for="{{ $deputy->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
