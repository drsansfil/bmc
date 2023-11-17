@extends('layouts.front')
@section('title', __('message.btn_analyse'))
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
                        <h1>{{ __('message.btn_analyse') }}</h1>
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
                                <span class="active">{{ __('message.btn_analyse') }}</span>
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
                <div class="col-md-8">

                    <!-- .row start -->
                    <div class="row portfolio-items-holder">
                        <ul class="cases-list clearfix">

                            @forelse ($analyses as $item)
                                <li class="col-md-12">
                                    <div class="portfolio-item">
                                        <div class="media">
                                            <a href="#">
                                                <img src="/uploads/{{ $item->image }}"
                                                    alt="ConsultingPress Management Consulting Developing a 10-Year Business Strategy for MixLogistics" />
                                            </a>
                                        </div><!-- .media end -->

                                        <div class="body">
                                            <a href="#">
                                                @if (app()->getLocale() == 'en')
                                                    <h2>{{ $item->titre_en }} </h2>
                                                @else
                                                    <h2>{{ $item->titre }} </h2>
                                                @endif

                                            </a>
                                        </div><!-- .body end -->
                                    </div><!-- .portfolio-item end -->
                                </li><!-- portfolio item end -->
                            @empty
                            @endforelse



                        </ul><!-- .cases-list end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-8 end -->

                <aside class="col-md-4 aside-right">

                    <!-- .aside-widgets start -->
                    <ul class="aside-widgets">



                        <!-- Latest projects start -->
                        <li id="custom-post-type-recent-posts-2" class="widget widget_recent_entries">
                            <div class="title">
                                <h3>{{ __('message.Latest_News') }}</h3>
                            </div><!-- .title end -->

                            <ul>
                                @forelse ($projets as $item)
                                    <li>
                                        @if (app()->getLocale() == 'en')
                                            <a href="/projet/post/{{ $item->id }}">{{ $item->nom_projet_en }}</a>
                                        @else
                                            <a href="/projet/post/{{ $item->id }}">{{ $item->nom_projet }}</a>
                                        @endif

                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li><!-- .widget_recent_entries end -->
                    </ul><!-- .aside-widgets -->
                </aside><!-- aside.col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
