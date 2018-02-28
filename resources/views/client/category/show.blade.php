@extends('client.layout.app') @section('content')
<div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$category->name}}</h1>
        </div>
    </div>
<div class="container">

    <div class="row medium-padding120">

        <div class="col-lg-12">
            <aside aria-label="sidebar" class="sidebar sidebar-right">
                <div class="widget w-tags">


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

    </div>

    <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-6">
                <article class="hentry post post-standard has-post-thumbnail sticky">

                    <div class="post-thumb">
                        <img src="/uploads/articles/{{$article->image}}" alt="seo">
                        <div class="overlay"></div>
                        <a href="/uploads/articles/{{$article->image}}" class="link-image js-zoom-image">
                            <i class="seoicon-zoom"></i>
                        </a>
                        <a href="#" class="link-post">
                            <i class="seoicon-link-bold"></i>
                        </a>
                    </div>

                    <div class="post__content">

                        <div class="post__content-info">

                            <h2 class="post__title entry-title ">
                            <a href="{{route('client.article.show', ["id" => $article->id])}}">{{$article->title}}</a>
                            </h2>

                            <div class="post-additional-info">

                                <span class="post__date">

                                    <i class="seoicon-clock"></i>

                                    <time class="published" datetime="2016-04-17 12:00:00">
                                        {{$article->created_at->format('m/d/Y')}}
                                    </time>

                                </span>

                                <span class="category">
                                    <i class="seoicon-tags"></i>
                                    <a href="#">{{$article->category->name}}</a>
                                </span>

                            </div>
                        </div>
                    </div>

                </article>
            </div>
            @endforeach


        </div>

</div>


@endsection