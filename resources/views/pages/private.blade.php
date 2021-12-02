@extends('layouts.app')

@section('title', 'Приватная страница')
@section('content')
    <div class="ml-4 mt-4">
        <div>
            <h2>Привет, <span style="font-weight: 600; color: royalblue">{{ $userName }}</span></h2>
        </div>

        <div class="btn-group-vertical">
            <a class="btn btn-success" href="{{ route('articles.index') }}">Статьи</a>
            <a class="btn btn-warning" href="{{ route('articles.create') }}">Добавить статью</a>
            <a class="btn btn-danger" href="{{ route('user.logout') }}">Выйти</a>
        </div>

    </div>
@endsection
