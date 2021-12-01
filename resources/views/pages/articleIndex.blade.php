@extends('layouts.app')

@section('content')
    <div class="p-2 btn-group-sm">
        <a href="{{ route('articles.index') }}"
           class="@if(!isset($_GET['filter'])) btn btn-primary @else btn btn-outline-primary @endif">Все</a>
        <a href="?filter=published"
           class="@if(isset($_GET['filter']) && $_GET['filter'] === 'published') btn btn-primary @else btn btn-outline-primary @endif">Опубликованные</a>
        <a href="?filter=hidden"
           class="@if(isset($_GET['filter']) && $_GET['filter'] === 'hidden') btn btn-primary @else btn btn-outline-primary @endif">Снятые</a>
    </div>
    @if(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @foreach($articles as $article)
            @continue(isset($_GET['filter']) && $_GET['filter'] === 'published' && $article->is_published == false)
            @continue(isset($_GET['filter']) && $_GET['filter'] === 'hidden' && $article->is_published == true)
            <div class="card col-sm-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text"
                       style=" -webkit-line-clamp: 4;display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;">{{ $article->description }}</p>
                    <img src="{{ asset($article->image) }}" class="card-img-top" width="250px" height="250px"
                         style="object-fit: cover;" alt="...">

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"
                        style=" -webkit-line-clamp: 5; display: -webkit-box; -webkit-box-orient: vertical; overflow: scroll;">{{ $article->body }}</li>
                    <li class="list-group-item">Категория: {{ $article->category->name }}</li>
                    <li class="list-group-item">Slug: {{ $article->slug }}</li>
                    <li class="list-group-item">Create: {{ $article->created_at->format('d.m.Y H:m:s') }}</li>
                    <li class="list-group-item">
                        Publish: @if($article->published_at) {{ $article->published_at->format('d.m.Y H:m:s') }} @endif</li>
                    <li class="list-group-item">
                        Update: @if($article->updated_at) {{ $article->updated_at->format('d.m.Y H:m:s') }} @endif</li>
                    <li class="list-group-item">Is published: @if($article->is_published) YES @else NO @endif</li>
                </ul>
                <div class="card-body btn-group p-2">
                    <form method="POST" class="btn-group-sm mr-2" action="{{ route('articles.destroy', $article) }}">
                        @csrf
                        @method('DELETE')
                        <a type="button" href="{{ route('articles.edit', $article) }}"
                           class="btn btn-warning mr-1">изменить</a>
                        <button type="submit" class="btn btn-danger">удалить</button>
                    </form>
                    <form method="POST" class="btn-group-sm mr-2" action="{{ route('articles.publish', $article) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn @if($article->is_published) btn-secondary @else btn-success @endif">@if($article->is_published) снять @else опубликовать @endif</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
