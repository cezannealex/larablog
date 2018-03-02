@extends('client.layout.app')

@section('content')
{{--  content  --}}
<div class="container">

    <div class="row">
        <div class="col-lg-2"></div>
        @foreach($top_articles as $top_article)
        <div class="col-lg-8">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="/uploads/articles/{{$top_article->image}}" alt="seo">
                    <div class="overlay"></div>
                    <a href="/uploads/articles/{{$top_article->image}}" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                        <a href="{{route('client.article.show', ["id" => $top_article->id])}}">{{$top_article->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published">
                                    {{$top_article->created_at->format('m/d/Y')}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">{{$top_article->category->name}}</a>
                            </span>

                        </div>
                    </div>
                </div>

            </article>
        </div>
        @endforeach
        <div class="col-lg-2"></div>
    </div>


    <div class="row">
        @foreach($featured_articles as $featured_article)
        <div class="col-lg-6">
            <article class="hentry post post-standard has-post-thumbnail sticky">

                <div class="post-thumb">
                    <img src="/uploads/articles/{{$featured_article->image}}" alt="seo">
                    <div class="overlay"></div>
                    <a href="/uploads/articles/{{$featured_article->image}}" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>

                <div class="post__content">

                    <div class="post__content-info">

                        <h2 class="post__title entry-title ">
                        <a href="{{route('client.article.show', ["id" => $featured_article->id])}}">{{$featured_article->title}}</a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-04-17 12:00:00">
                                    {{$top_article->created_at->format('m/d/Y')}}
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">{{$top_article->category->name}}</a>
                            </span>

                        </div>
                    </div>
                </div>

            </article>
        </div>
        @endforeach

    </div>
</div>


<div class="container-fluid">
    <div class="row medium-padding120 bg-border-color">
        <div class="container">

            <div class="col-lg-12">
                @foreach($top_categories as $top_category)
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                            <h4 class="h1 heading-title"><a href="{{route('client.category.show', ['id'=>$top_category->id])}}">{{$top_category->name}}</a></h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="case-item-wrap">
                            @foreach($top_category->articles->take(3) as $article)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="/uploads/articles/{{$article->image}}" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">
                                    <a href="{{route('client.article.show', ["id" => $article->id])}}">{{$article->title}}</a>
                                    </h6>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="padded-50"></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection