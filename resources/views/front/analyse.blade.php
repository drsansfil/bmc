@extends('layouts.front')
@section('title', 'Analyse')
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
                            <h1>Analyse</h1>
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
                                    <span class="active">Analyse</span>
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
                                                <img src="/uploads/{{ $item->image}}" alt="ConsultingPress Management Consulting Developing a 10-Year Business Strategy for MixLogistics"/>
                                            </a>
                                        </div><!-- .media end -->

                                        <div class="body">
                                            <a href="#">
                                                <h2>{{ $item->titre}} </h2>
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

                            <!-- Project Categories start -->
                            <li id="custom-post-type-categories-2" class="widget widget_categories clearfix">
                                <div class="title">
                                    <h3>Project Categories</h3>
                                </div><!-- .title end -->

                                <ul>
                                    <li class="cat-item cat-item-2">
                                        <a href="#" title="All Projects">All Projects</a>
                                    </li>

                                    <li class="cat-item cat-item-2">
                                        <a href="#" title="Mergers & Acquisitions">Mergers & Acquisitions</a>
                                    </li>

                                    <li class="cat-item cat-item-2">
                                        <a href="#" title="Strategy & Growth">Strategy & Growth</a>
                                    </li>

                                    <li class="cat-item cat-item-2">
                                        <a href="#" title="Global Expansion">Global Expansion</a>
                                    </li>

                                    <li class="cat-item cat-item-2">
                                        <a href="#" title="Customer Strategy">Customer Strategy</a>
                                    </li>
                                </ul>
                            </li><!-- .widgetwidget_categories end -->

                            <!-- Latest projects start -->
                            <li id="custom-post-type-recent-posts-2" class="widget widget_recent_entries">
                                <div class="title">
                                    <h3>Recent Projects</h3>
                                </div><!-- .title end -->

                                <ul>
                                    <li>
                                        <a href="#">Developing a 10-Year Business Strategy for MixLogistics</a>
                                    </li>

                                    <li>
                                        <a href="management-case-market-assessment-aqua-park.html">Detailed Market Assessment for Aqua Park in Istria Croatia</a>
                                    </li>

                                    <li>
                                        <a href="management-case-management-global-strategy-geo-informatics.html">Global Strategy Development and Market Analysis for GEO Informatics</a>
                                    </li>
                                </ul>
                            </li><!-- .widget_recent_entries end -->
                        </ul><!-- .aside-widgets -->
                    </aside><!-- aside.col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

   @endsection
