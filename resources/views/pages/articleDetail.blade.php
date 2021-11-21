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
                            <h3 class="mb-5 font-weight-bold">6 Comments</h3>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('/assets/images/person_1.jpg') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">October 03, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>
                                </li>

                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('/assets/images/person_1.jpg') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">October 03, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="{{ asset('/assets/images/person_1.jpg') }}"
                                                     alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>John Doe</h3>
                                                <div class="meta">October 03, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                    officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                    impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>


                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="{{ asset('/assets/images/person_1.jpg') }}"
                                                             alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>John Doe</h3>
                                                        <div class="meta">October 03, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply">Reply</a></p>
                                                    </div>

                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="vcard bio">
                                                                <img src="{{ asset('/assets/images/person_1.jpg') }}"
                                                                     alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3>John Doe</h3>
                                                                <div class="meta">October 03, 2018 at 2:21pm</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Pariatur quidem laborum necessitatibus, ipsam
                                                                    impedit vitae autem, eum officia, fugiat saepe enim
                                                                    sapiente iste iure! Quam voluptas earum impedit
                                                                    necessitatibus, nihil?</p>
                                                                <p><a href="#" class="reply">Reply</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="{{ asset('/assets/images/person_1.jpg') }}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>John Doe</h3>
                                        <div class="meta">October 03, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Оставить комментарий</h3>
                                <form action="#" class="p-3 p-md-4 bg-light">
                                    <div class="form-group">
                                        <label for="name">Имя *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Сообщение</label>
                                        <textarea name="" id="message" cols="30" rows="8"
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
                            <li><a href="#">Мода <span>(6)</span></a></li>
                            <li><a href="#">Технологии <span>(8)</span></a></li>
                            <li><a href="#">Путешествия <span>(2)</span></a></li>
                            <li><a href="#">Образ жизни <span>(2)</span></a></li>
                            <li><a href="#">Фотографии <span>(7)</span></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Популярные статьи</h3>
                        @foreach($popularArticles as $article)
                            <div class="block-21 mb-4 d-flex">
                                <a href="{{ route('article.show', $article) }}" class="blog-img mr-4"
                                   style="background-image: url({{ $article->image }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h3>
                                    <div class="meta">
                                        <div><p><span
                                                    class="icon-calendar"></span> {{ $article->published_at->translatedFormat('d/m/y') }}
                                            </p></div>
                                        <div><a href="#author"><span class="icon-person"></span> Рональд Толкиен</a>
                                        </div>
                                        <div><a href="{{ route('article.show', $article) }}"><span
                                                    class="icon-chat"></span> {{ $article->messages_count }}</a></div>
                                    </div>
                                </div>
                            </div>
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
