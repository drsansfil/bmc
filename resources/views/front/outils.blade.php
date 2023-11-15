@extends('layouts.front')
@section('title', 'outils')
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
                        <h1>Notre liste d'outils</h1>
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
                                <span class="active">Nos outils</span>
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
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- .custom-heading-02 start -->
                    <div class="custom-heading-02">
                        <h2>NOS OUTILS DE TRAVAIL</h2>
                        <span>.</span>
                    </div><!-- .custom-heading-02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <!-- .row start -->
            <div class="row">

                @forelse ($outils as $item)
                    <!-- .col-md-4 start -->
                    <div class="col-md-4 col-sm-4">
                        <!-- .service-feature-box-04 start -->
                        <div class="service-box service-box-04 triggerAnimation animated" data-animate="fadeInLeft">
                            <div class="media">
                                <a href="#">
                                    <img src="/uploads/{{ $item->image}}"
                                        alt="{{ $item->titre}}">
                                </a>
                            </div>

                            <div class="icon-container">
                                <i class="lynny-radar"></i>
                            </div><!-- .icon-container end -->

                            <div class="text-container">
                                <a href="#">
                                    <h3> {{ $item->titre}}</h3>
                                </a>

                                <p>
                                    {{ $item->description }}
                                </p>
                            </div><!-- .text-container end -->
                        </div><!-- .service-feature-box-04 end -->
                    </div><!-- .col-md-4 end -->
                @empty
                @endforelse

            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
