@extends('layouts.app')

@section('title', 'About me')

@section('content')
    <section class="p-4">
        <div>
            <h1>Создать статью</h1>
        </div>
        <x-panels.articleCreateForm/>
    </section>
@endsection
