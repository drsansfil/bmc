@extends('layouts.front')
@if (app()->getLocale() == 'en')
    @section('title', $projet->nom_projet_en)
    @section('description',$projet->description_en)
@else
    @section('title', $projet->nom_projet)
    @section('description',$projet->description)
@endif
@section('content')

@section('image',asset('uploads') .'/'. $projet->images()->first()->url )

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
                            <li>{{ __('message.You_are_here') }}: </li>

                            <li>
                                <a href="/">{{ __('message.btn_accueil') }}</a>
                            </li>

                            <li>
                                <a href="/projets">{{ __('message.btn_projets') }}</a>
                            </li>

                            <li>
                                @if (app()->getLocale() == 'en')
                                    <span class="active">{{ $projet->nom_projet_en }}</span>
                                @else
                                    <span class="active">{{ $projet->nom_projet }}</span>
                                @endif

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
                            @if (app()->getLocale() == 'en')
                                <h2>{{ $projet->nom_projet_en }}</h2>
                                {!! $projet->description_en !!}
                            @else
                                <h2>{{ $projet->nom_projet }}</h2>
                                {!! $projet->description !!}
                            @endif

                            <div class="row">
                                @forelse ($projet->images as $item)
                                    <div class="col-sm-6">
                                        <img src="/uploads/{{ $item->url }}" alt="">
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
                                <h3>{{ __('message.Latest_News') }}</h3>
                            </div><!-- .title end -->
                            <ul class="pi-latest-posts-03">
                                @forelse ($projets as $item)
                                    <li class="post-container">
                                        @if (app()->getLocale() == 'en')
                                            <a href="/projet/post/{{ $item->id }}">{{ $item->nom_projet_en }}</a>
                                        @else
                                            <a href="/projet/post/{{ $item->id }}">{{ $item->nom_projet }}</a>
                                        @endif

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
                        @if (app()->getLocale() == 'en')
                            @if ($projet_precedent)
                                <a href="/projet/post/{{ $projet_precedent->id }}" class="nav-prev">{{ $projet_precedent->nom_projet_en }}</a>
                            @endif
                        @else
                            @if ($projet_precedent)
                                <a href="/projet/post/{{ $projet_precedent->id }}" class="nav-prev">{{ $projet_precedent->nom_projet }}</a>
                            @endif
                        @endif
                    </p>
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4">
                    <p>
                        <a href="/projets">{{ __('message.btn_projets') }}</a>
                    </p>
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4">
                    <p>
                        @if (app()->getLocale() == 'en')
                            @if ($projet_suivant)
                                <a href="/projet/post/{{ $projet_suivant->id }}" class="nav-next">{{ $projet_suivant->nom_projet_en }}</a>
                            @endif
                        @else
                            @if ($projet_suivant)
                                <a href="/projet/post/{{ $projet_suivant->id }}" class="nav-next">{{ $projet_suivant->nom_projet }}</a>
                            @endif
                        @endif


                    </p>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
