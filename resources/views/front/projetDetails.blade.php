@extends('layouts.front')
@section('title', $projet->nom_projet)
@section('content')

    <div class="page-title page-title-style-02 bkg-img09">
        <div class="pt-mask-light"></div>

        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .pt-heading start -->
                    <div class="pt-heading">
                        <h1>{{ $projet->nom_projet }}</h1>
                    </div><!-- .pt-heading end -->
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- breadcrumbs start -->
                    <div class="breadcrumb-container clearfix">
                        <ul class="breadcrumb">
                            <li>You are here: </li>

                            <li>
                                <a href="/">Home</a>
                            </li>

                            <li>
                                <a href="/projets">Projets</a>
                            </li>

                            <li>
                                <span class="active">{{ $projet->nom_projet }}</span>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style-01 end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">

                <!-- .col-md-8 start -->
                <ul class="col-md-8 blog-posts blog-grid blog-single clearfix">
                    <li class="post-container clearfix">

                        <div class="post-body">
                            <span class="date">{{ $projet->created_at }}</span>

                            <h2>{{ $projet->nom_projet }}</h2>

                            {!! $projet->description !!}
                            <div class="row">
                                @forelse ($projet->images as $item)
                                <div class="col-sm-6">
                                    <img src="/uploads/{{$item->url}}" alt="">
                                </div>
                            @empty

                            @endforelse
                            </div>
                        </div><!-- .post-body end -->

                    </li><!-- .post-container end -->
                </ul><!-- .col-md-8.blog-posts.blog-list end -->

                <aside class="col-md-4 aside-right">
                    <!-- .aside-widgets start -->
                    <ul class="aside-widgets">
                        <li class="widget widget-text">
                            <div class="title">
                                <h3>Dernieres Projets</h3>
                            </div><!-- .title end -->
                            <ul class="pi-latest-posts-03">
                                @forelse ($projets as $item)
                                    <li class="post-container">
                                        <a href="/projets/post/{{ $item->id }}">{{ $item->nom_projet}}</a>
                                        <span class="date">{{ $item->created_at }}</span>
                                    </li><!-- .post-container end -->
                                @empty
                                <i>Aucune publicaion.</i>
                                @endforelse
                            </ul><!-- .pi-latest-posts-03 end -->
                        </li><!-- .widget end -->

                    </ul><!-- .aside-widgets -->
                </aside><!-- aside.col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-content start -->
    <div class="page-content portfolio-blog-nav-simple">

        <!-- .container start -->
        <div class="container-fluid">

            <!-- .row start -->
            <div class="row mb-0">

                <!-- .col-md-4 start -->
                <div class="col-md-4">
                    <p>
                        <a href="management-news-single-consultingpress-quality-over-quantity.html" class="nav-prev">prev
                            post</a>
                    </p>
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4">
                    <p>
                        <a href="management-news-grid.html">Back to news</a>
                    </p>
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4">
                    <p>
                        <a href="management-news-single-logistics-leaders.html" class="nav-next">next post</a>
                    </p>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
