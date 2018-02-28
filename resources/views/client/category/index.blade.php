@extends('client.layout.app') @section('content')
<div class="container">

    <main class="main">
        <div class="row">

            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL CATEGORIES</h4>
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

        </div>

        <div class="row">
            <div class="case-item-wrap">
                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="case-item">
                            <div class="case-item__thumb">
                                <img src="/uploads/articles/{{$article->image}}" alt="our case">
                            </div>
                            <h6 class="case-item__title">
                                <a href="{{route('client.article.show', [ 'id'=>$article->id] ) }}">{{$article->title}}</a>
                            </h6>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br>
        <br>
        <br>
    </main>





</div>
@endsection