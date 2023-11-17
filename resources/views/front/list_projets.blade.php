@extends('layouts.front')
@section('title', __('message.btn_projets'))
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
                        <h1>{{ __('message.btn_projets') }}</h1>
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
                                <span class="active">{{ __('message.btn_projets') }}</span>
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
            <div class="row portfolio-items-holder">
                <ul class="cases-grid clearfix">
                    @forelse ($projets as $item)
                        <li class="col-md-4 col-sm-6">
                            <div class="portfolio-item">
                                <div class="media">
                                    <a href="/projet/post/{{ $item->id }}">
                                        <img src="{{ asset('uploads')}}/{{ $item->images()->first()->url }}" alt="{{ $item->nom_projet }}" />
                                    </a>
                                </div><!-- .media end -->

                                <div class="body">
                                    <a href="/projet/post/{{ $item->id }}">
                                        <h2>{{ $item->nom_projet }} </h2>
                                    </a>

                                    <ul class="portfolio-tags">
                                        <li>
                                            <a href="#">
                                                {{$item->created_at}}
                                            </a>
                                        </li>
                                    </ul><!-- .portfolio-tags end -->
                                </div><!-- .body end -->
                            </div><!-- .portfolio-item end -->
                        </li><!-- .col-md-4 end -->
                    @empty
                    @endforelse


                </ul><!-- #portfolioitems end -->
            </div><!-- .row end -->


        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
