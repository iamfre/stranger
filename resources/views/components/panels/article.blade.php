@props(['article', 'count', 'last',])

@if($count % 3 === 1)
    {{--1 статья--}}
    @if ($last !== $count)
    <div class="col-md-8 d-flex">
        <div class="row">
    @endif
            <div class="@if ($last === $count) col-md-8 @else col-md-12 @endif">
                <div class="blog-entry ftco-animate d-md-flex align-items-center">
                    <a href="{{ route('article.show', $article) }}" class="img img-2"
                       style="background-image: url({{ $article->image }})"></a>
                    <div class="text text-2 p-4">
                        <h3 class="mb-2"><a href="{{ route('article.show', [$article]) }}">{{ $article->title }}</a>
                        </h3>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-1"></i>{{ $article->published_at->translatedFormat('d M Y') }}</span>
                                <span><a href="{{ route('category.show', $article->category_id) }}"><i class="icon-folder-o mr-1"></i>{{ $article->category->name }}</a></span>
                                <span><i class="icon-comment2 mr-1"></i><x-panels.countMsgOfArticle :msg="$article->messages_count" /></span>
                            </p>
                        </div>
                        <p class="mb-4">{{ $article->description }}</p>
                        <p><a href="{{ route('article.show', $article) }}" class="btn-custom">Узнать больше <span
                                    class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
@elseif ($count % 3 === 2)
    {{--2 статья--}}
    <div class="col-md-12">
        <div class="blog-entry ftco-animate d-md-flex align-items-center">
            <a href="{{ route('article.show', $article) }}" class="img img-2 order-md-last"
               style="background-image: url({{ $article->image }})"></a>
            <div class="text text-2 p-4 text-md-right">
                <h3 class="mb-2"><a href="{{ route('article.show', $article) }}">{{ $article->title }}</a>
                </h3>
                <div class="meta-wrap">
                    <p class="meta">
                        <span><i class="icon-calendar mr-1"></i>{{ $article->published_at->translatedFormat('d M Y') }}</span>
                        <span><a href="{{ route('category.show', $article->category_id) }}"><i class="icon-folder-o mr-1"></i>{{ $article->category->name }}</a></span>
                        <span><i class="icon-comment2 mr-1"></i><x-panels.countMsgOfArticle :msg="$article->messages_count" /></span>
                    </p>
                </div>
                <p class="mb-4">{{ $article->description }}</p>
                <p><a href="{{ route('article.show', $article) }}" class="btn-custom">Узнать больше <span
                            class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
@elseif ($count % 3 === 0)
    <div class="col-md-4 d-flex">
        <div class="blog-entry ftco-animate">
            <a href="{{ route('article.show', $article) }}" class="img"
               style="background-image: url({{ $article->image }})"></a>
            <div class="text p-4">
                <h3 class="mb-2"><a href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h3>
                <div class="meta-wrap">
                    <p class="meta">
                        <span><i class="icon-calendar mr-1"></i>{{ $article->published_at->translatedFormat('d M Y') }}</span>
                        <span><a href="{{ route('category.show', $article->category_id) }}"><i class="icon-folder-o mr-1"></i>{{ $article->category->name }}</a></span>
                        <span><i class="icon-comment2 mr-1"></i><x-panels.countMsgOfArticle :msg="$article->messages_count" /></span>
                    </p>
                </div>
                <p class="mb-4">{{ $article->description }}</p>
                <p><a href="{{ route('article.show', $article) }}" class="btn-custom">Узнать больше <span class="ion-ios-arrow-forward"></span></a>
                </p>
            </div>
        </div>
    </div>
@endif
