@extends('layouts.front')
@section('title', 'Assistance')
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
                        <h1>Assistance</h1>
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
                                <span class="active">Assistance</span>
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
                                <h3>Service d'assistance</h3>
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
                                    <h4>voulez-vous profiter de nos services ?</h4>
                                </div>

                                <a href="/contact" class="btn icon-animated">
                                    <span>
                                        <i class="lynny-page-1"></i>
                                        Contactez-nous
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
                                <h3>ConsultingPress</h3>
                            </div><!-- .title end -->

                            <!-- .menu-quick-links-container start -->
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li class="menu-item">
                                        <a href="management-about.html">About us</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="management-our-history.html">Company history</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="management-our-team.html">Our team</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="management-job-listing.html">Careers</a>
                                    </li>

                                    <li class="menu-item current-menu-item">
                                        <a href="management-services-image-grid.html">Our services</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="management-cases-grid.html">Case studies</a>
                                    </li>
                                </ul><!-- #menu-quick-links end -->
                            </div><!-- .menu-quick-links-container end -->
                        </li><!-- .widget_nav_menu end -->

                        <li class="widget">
                            <div class="title">
                                <h3>Brochure download</h3>
                            </div>

                            <div class="textwidget">
                                <p>
                                    <a href="ConsultingPress-Multiniche-Consulting-Theme.pdf"
                                        class="download-link">Consulting Press 2016 EN</a>
                                    <a href="ConsultingPress-Multiniche-Consulting-Theme.pdf"
                                        class="download-link">Consulting Press 2016 DE</a>
                                </p>
                            </div><!-- .textwidget end -->
                        </li><!-- .widget end -->


                    </ul><!-- .aside-widgets -->
                </aside><!-- aside.col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
