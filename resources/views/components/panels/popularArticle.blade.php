@props(['article'])

<div class="block-21 mb-4 d-flex">
    <a href="{{ route('articles.show', $article) }}" class="blog-img mr-4"
       style="background-image: url({{ asset($article->image) }})"></a>
    <div class="text">
        <h3 class="heading"><a
                href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h3>
        <div class="meta">
            <div><p><span
                        class="icon-calendar"></span> {{ $article->published_at->translatedFormat('d/m/y') }}
                </p></div>
            <div><a href="#author"><span class="icon-person"></span> Рональд Толкиен</a>
            </div>
            <div><a href="{{ route('articles.show', $article) }}"><span
                        class="icon-chat"></span> {{ $article->messages_count }}</a></div>
        </div>
    </div>
</div>
