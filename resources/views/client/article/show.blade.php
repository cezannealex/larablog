@extends('client.layout.app')

@section('content')

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
    <h1 class="stunning-header-title">{{$article->title}}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                    <img src="/uploads/articles/{{$article->image}}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                <a href="#" class="post__author-link">{{$article->user->name}}</a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                        {{$article->created_at->format('m/d/Y')}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                            <a href="#">{{$article->category->name}}</a>
                            </span>

                        </div>

                        <div class="post__content-info">

                            <p class="post__subtitle">
                                {{$article->title}}
                            </p>

                            <p class="post__text">
                                {{$article->content}}
                            </p>



                            <div class="widget w-tags">
                                <div class="tags-wrap">
                                <a href="{{route('client.category.show', ['id'=>$article->category->id])}}" class="w-tags-item">{{$article->category->name}}</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="socials">Share:
                        <a href="#" class="social__item">
                            <i class="seoicon-social-facebook"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-twitter"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-linkedin"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-google-plus"></i>
                        </a>
                        <a href="#" class="social__item">
                            <i class="seoicon-social-pinterest"></i>
                        </a>
                    </div>

                </article>

                <div class="blog-details-author">

                    <div class="blog-details-author-thumb">
                    <img src="/uploads/users/{{$article->user->image}}" alt="Author" style="width: 100px; height: 100px;">
                    </div>

                    <div class="blog-details-author-content">
                        <div class="author-info">
                            <h5 class="author-name">{{$article->user->name}}</h5>
                        </div>

                        <div class="socials">

                            <a href="#" class="social__item">
                                <img src="{{asset('client/svg/circle-facebook.svg')}}" alt="facebook">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{asset('client/svg/twitter.svg')}}" alt="twitter">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{asset('client/svg/google.svg')}}" alt="google">
                            </a>

                            <a href="#" class="social__item">
                                <img src="{{asset('client/svg/youtube.svg')}}" alt="youtube">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="pagination-arrow">
                    @if($article->id > 1)
                    <a href="{{route('client.article.show', ['id' => $article->id - 1])}}" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Previous</div>
                        </div>
                    </a>
                    @endif

                <a href="{{route('client.article.show', ['id' => $article->id + 1])}}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>

                </div>






            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL Categories</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                            @foreach($categories as $category)
                                <a href="{{route( 'client.category.show', ['id' => $category->id] )}}" class="w-tags-item">
                            {{$category->name}}
                        </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->

        </main>
    </div>
</div>

@endsection