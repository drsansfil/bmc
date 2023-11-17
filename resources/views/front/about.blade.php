@extends('layouts.front')
@section('title',  __('message.btn_apropos'))
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
                        <h1>{{ __('message.btn_apropos') }}</h1>
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
                                <span class="active">{{ __('message.btn_apropos') }}</span>
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
                            <!-- .custom-heading-01 start -->
                            <div class="custom-heading-01">
                                <span>company</span>
                                <h2>{{ __('message.about_o') }}</h2>
                            </div><!-- .custom-heading-01 end -->
                            <p>
                                {{ __('message.about_1') }}
                                <br><br>

                                {{ __('message.about_2') }} <br>
                                <img src="/images/about1.jpg" alt="" style="width: 100%" srcset="">
                                <br><br>
                                {{ __('message.about_3') }}
                                <br><br>
                                <img src="/images/about2.jpg" alt="" style="width: 100%" srcset="">

                            </p>
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->


                </div><!-- .col-md-8 end -->

                <aside class="col-md-4 aside-right">

                    <!-- .aside-widgets start -->
                    <ul class="aside-widgets">
                        <li class="widget widget_nav_menu clearfix">
                            <div class="title">
                                <h3>{{ __('message.btn_nos_missions') }}</h3>
                            </div><!-- .title end -->

                            <!-- .menu-quick-links-container start -->
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li class="menu-item current-menu-item">
                                        <a href="/analyse">{{ __('message.btn_analyse') }}</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/assistance">{{ __('message.btn_assistance') }}</a>
                                    </li>
                                </ul><!-- #menu-quick-links end -->
                            </div><!-- .menu-quick-links-container end -->
                        </li><!-- .widget_nav_menu end -->

                    </ul><!-- .aside-widgets -->
                </aside><!-- aside.col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
