@extends('admin.layouts.main')

@section('crumbs')

<div class="crumbs">
    <img src="{{ asset('admins/img/ico/purple-home.svg')}}" alt="">




    <img src="{{ asset('admins/img/ico/arrow.svg')}}">
    <div>
        Комитеты
    </div>

</div>

@endsection

@section('content')

<div class="content">
    <div class="title">
        <h1 class="title">Комитеты</h1>


        <a href="{{ route('committees.create') }}">
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
            <div class="w35">Глава</div>
            <div class="date w15">Дата создания</div>
        </div>

        <div class="boxButton w5a5">
        </div>
    </div>

    <div class="content__list">
        <!-- list__item -->
        @foreach ($committees_all as $committee)
        <div class="list__item">
            <div class="item__txt">
                <div class="w5">{{ $committee->id }}</div>
                <div class="w35">{{ $committee->name_tm }}</div>
                <div class="w35">
                    {{ $committee->committee_head?->fullname_tm }}
                </div>
                <div class="date w15">{{ $committee->created_at }} </div>
            </div>

            <div class="item__button w5a5">
                <a href="{{ route('committees.edit', $committee->id) }}">
                    <img src="{{ asset('admins/img/ico/edit_v2.svg')}}">
                </a>
                <form action="{{ route('committees.destroy', $committee->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" id="{{ $committee->id }}" value="">
                    <label for="{{ $committee->id }}">
                        <img src="{{ asset('admins/img/ico/delete.svg') }}">
                    </label>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
