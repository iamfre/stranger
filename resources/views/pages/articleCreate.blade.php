@extends('layouts.app')

@section('title', 'Создать статью')

@section('content')
    <section class="p-2">
        <div >
            <h2>@isset($article) Изменить статью: {{$article->title}}@else Создать новую статью @endisset</h2>
        </div>
        @if(isset($article))
            <x-panels.articleCreateForm :article="$article" :categories="$categories"/>
        @else
            <x-panels.articleCreateForm :categories="$categories"/>
        @endif
    </section>
@endsection
