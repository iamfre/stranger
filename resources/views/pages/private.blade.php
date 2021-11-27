@extends('layouts.app')

@section('title', 'Приватная страница')
@section('content')
    <div class="ml-4 mt-4">
        <div>
            <h2>Привет, <span style="font-weight: 600; color: royalblue">{{ $userName }}</span></h2>
        </div>

        <div>
            <a class="" href="/article/create">Добавить статью</a>
        </div>

        <div>
            <a href="{{ route('user.logout') }}">Выйти</a>
        </div>

    </div>
@endsection
