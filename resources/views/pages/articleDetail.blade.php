@extends('layouts.app')

@section('title', "$article->title")

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container px-0">
            <div class="row d-flex no-gutters">
                <div class="col-lg-8 px-md-5 py-5">
                    <div class="row">
                        <h1 class="mb-3">{{$article->title}}</h1>
                        <p>{{ $article->description }}</p>
                        <p>
                            <img src="{{$article->image}}" alt="" class="img-fluid">
                        </p>
                        <p>{{$article->body}}</p>
                        <div class="tag-widget post-tag-container mb-5 mt-5">
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Жизнь</a>
                                <a href="#" class="tag-cloud-link">Спорт</a>
                                <a href="#" class="tag-cloud-link">Технологии</a>
                                <a href="#" class="tag-cloud-link">Путешествия</a>
                            </div>
                        </div>

                        <div class="about-author d-flex p-4 bg-light">
                            <div class="bio mr-5">
                                <img src="{{ asset('/assets/images/tolkien.jpg') }}" alt="Image placeholder"
                                     class="img-fluid mb-4">
                            </div>
                            <div class="desc">
                                <h3>Джон Рональд Руэл Толкин</h3>
                                <p>Один из самых известных писателей, автор более двухсот различных публикаций. Наиболее
                                    известен как автор классических произведений «высокого фэнтези»: «Хоббит, или Туда и
                                    обратно», «Властелин колец».</p>
                            </div>
                        </div>

                        <div class="pt-5 mt-5">
                            <h3 class="mb-5 font-weight-bold">
                                <x-panels.countMsgOfArticle :msg="$comments->count()"/>
                            </h3>
                            <ul class="comment-list">
                                @foreach($comments as $comment)
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{ asset('/assets/images/person_1.jpg') }}"
                                                 alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>{{ $comment->author }}</h3>
                                            <div class="meta">{{ $comment->updated_at->format('d.m.Y H:i') }}</div>
                                            <p>{{ $comment->body }}</p>
                                            <p><a href="#" class="reply">Ответить</a></p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Оставить комментарий</h3>
                                <form action="{{ route('comment.create') }}" method="POST" class="p-3 p-md-4 bg-light">
                                    @csrf

                                    <div class="form-group">
                                        <label for="author">Имя *</label>
                                        <input type="text" id="author" class="form-control" name="author">
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="article_id" class="form-control" id="article_id" value="{{ $article->id }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Сообщение</label>
                                        <textarea name="body" id="body" cols="100%" rows="10"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Отправить" class="btn py-3 px-4 btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div><!-- END-->
                </div>
                <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
                    <div class="sidebar-box pt-md-4">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Поиск">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Категории</h3>
                        <ul class="categories">
                            @foreach($categories as $category)
                                <li><a href="{{ route('category.show', $category) }}">{{ $category->name }} <span>({{ $category->articles->count() }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Популярные статьи</h3>
                        @foreach($popularArticles as $article)
                            <x-panels.popularArticle :article="$article"/>
                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Облако тегов</h3>
                        <ul class="tagcloud">
                            <a href="#" class="tag-cloud-link">животные</a>
                            <a href="#" class="tag-cloud-link">горы</a>
                            <a href="#" class="tag-cloud-link">народы</a>
                            <a href="#" class="tag-cloud-link">кошки</a>
                            <a href="#" class="tag-cloud-link">собаки</a>
                            <a href="#" class="tag-cloud-link">природа</a>
                            <a href="#" class="tag-cloud-link">мода</a>
                            <a href="#" class="tag-cloud-link">еда</a>
                        </ul>
                    </div>

                    <div class="sidebar-box subs-wrap img px-4 py-5"
                         style="background-image: url({{asset('/assets/images/bg_1.jpg')}});">
                        <div class="overlay"></div>
                        <h3 class="mb-4 sidebar-heading">Новостная рассылка</h3>
                        <p class="mb-4">Получай полезные советы о том как путешествовать и оставайся в курсе
                            событий!</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ваш email адрес">
                                <input type="submit" value="Подписаться" class="mt-2 btn btn-white submit">
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Архив</h3>
                        <ul class="categories">
                            @foreach($archiveArticles as $value)
                                <li>
                                    <a href="#">{{ \Carbon\Carbon::now()->month($value->month)->day(1)->translatedFormat("F") }}
                                        <span>({{ $value->articles_count }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Цитата</h3>
                        <p>"Только люди способны проливать кровь за мир во всем мире" - &#xa9<span>Мадара Учиха</span>.
                        </p>
                    </div>
                </div><!-- END COL -->
            </div>
        </div>
    </section>
@endsection
