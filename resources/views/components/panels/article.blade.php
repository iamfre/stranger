@props(['article', 'count', 'last'])

@if($count % 3 === 1)
    {{--1 статья--}}
    @if ($last !== $count)
    <div class="col-md-8 d-flex">
        <div class="row">
    @endif
            <div class="@if ($last === $count) col-md-8 @else col-md-12 @endif">
                <div class="blog-entry ftco-animate d-md-flex align-items-center">
                    <a href="single.html" class="img img-2"
                       style="background-image: url(/assets/images/image_7.jpg);"></a>
                    <div class="text text-2 p-4">
                        <h3 class="mb-2"><a href="single.html">{{ $article->title }}</a>
                        </h3>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                        <p><a href="#" class="btn-custom">Read More <span
                                    class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
@elseif ($count % 3 === 2)
    {{--2 статья--}}
    <div class="col-md-12">
        <div class="blog-entry ftco-animate d-md-flex align-items-center">
            <a href="single.html" class="img img-2 order-md-last"
               style="background-image: url(/assets/images/image_8.jpg);"></a>
            <div class="text text-2 p-4 text-md-right">
                <h3 class="mb-2"><a href="single.html">{{ $article->title }}</a>
                </h3>
                <div class="meta-wrap">
                    <p class="meta">
                        <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                        <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                        <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                    </p>
                </div>
                <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                <p><a href="#" class="btn-custom">Read More <span
                            class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
@elseif ($count % 3 === 0)
    <div class="col-md-4 d-flex">
        <div class="blog-entry ftco-animate">
            <a href="single.html" class="img"
               style="background-image: url(/assets/images/image_6.jpg);"></a>
            <div class="text p-4">
                <h3 class="mb-2"><a href="single.html">{{ $article->title }}</a></h3>
                <div class="meta-wrap">
                    <p class="meta">
                        <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                        <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                        <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                    </p>
                </div>
                <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                </p>
            </div>
        </div>
    </div>
@endif
