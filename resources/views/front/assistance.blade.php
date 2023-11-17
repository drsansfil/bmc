@extends('layouts.front')
@section('title', __('message.btn_assistance'))
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
                        <h1>{{ __('message.btn_assistance') }}</h1>
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
                                <span class="active">{{ __('message.btn_assistance') }}</span>
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
                    <div class="row mb-80">
                        <!-- .col-md-12 start -->
                        <div class="col-md-12">
                            <!-- .custom-heading03 start -->
                            <div class="custom-heading-03">
                                <h3>{{ __('message.info_5') }}</h3>
                            </div><!-- .custom-heading-03 end -->

                            <ul class="fa-ul large-icons detailed clearfix">
                               @forelse ($assistances as $item)
                               <li>
                                <i class="icon-container lynny-checkmark-2"></i>

                                <div class="li-content">
                                    <h4>{{ $item->titre }}</h4>

                                    <p>
                                        {{ $item->description }}
                                    </p>


                                </div>
                            </li>
                               @empty

                               @endforelse


                            </ul>
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->

                    <!-- .row start -->
                    <div class="row mb-80">
                        <!-- .col-md-12 start -->
                        <div class="col-md-12">
                            <div class="divider"></div>
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->

                    <!-- .row start -->
                    <div class="row">
                        <!-- .col-md-12 start -->
                        <div class="col-md-12">
                            <!-- note start -->
                            <div class="call-to-action clearfix">
                                <div class="text">
                                    <h4>{{ __('message.info_4') }}</h4>
                                </div>

                                <a href="/contact" class="btn icon-animated">
                                    <span>
                                        <i class="lynny-page-1"></i>
                                        {{ __('message.call_us') }}
                                    </span>
                                </a>
                            </div><!-- .call-to-action end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-8 end -->

                <aside class="col-md-4 aside-right">

                    <!-- .aside-widgets start -->
                    <ul class="aside-widgets">
                        <li class="widget widget_nav_menu clearfix">
                            <div class="title">
                                <h3>{{ __('message.btn_nos_outils') }}</h3>
                            </div><!-- .title end -->

                            <!-- .menu-quick-links-container start -->
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    @forelse ($outils as $item)
                                    <li class="menu-item">
                                        <a href="management-about.html">{{ $item->titre}}</a>
                                    </li>
                                    @empty

                                    @endforelse
                                </ul><!-- #menu-quick-links end -->
                            </div><!-- .menu-quick-links-container end -->
                        </li><!-- .widget_nav_menu end -->



                    </ul><!-- .aside-widgets -->
                </aside><!-- aside.col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
