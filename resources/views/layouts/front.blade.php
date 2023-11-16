<!DOCTYPE html>
<html>

<head>
    <title>BMC - @yield('title')</title>
    <!-- Fonts and icon fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600&amp;subset=latin,latin-ext" type="text/css">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/fonts/lynny/style.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Home Page Required FIles -->
    <link rel="stylesheet" href="/masterslider/style/masterslider.min.css"><!-- Master slider main style -->
    <link rel="stylesheet" href="/masterslider/skins/default/style.min.css"><!-- Master slider default skin -->
    <link rel='stylesheet' href='/owl-carousel/owl.carousel.min.css' /><!-- Owl carousel -->
    <link rel="stylesheet" href="/css/odometer.min.css" /><!-- Number counter -->

    <!-- CSS Default Files -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/color-default.css">
    <link rel="stylesheet" href="/css/responsive.css">
    {{-- referencement --}}
    <!-- Twitter -->
    <meta name="twitter:card" content="@yield('image')">
    <meta name="twitter:site" content="TERACO.COM">
    <meta name="twitter:creator" content="TERACO.COM">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="@yield('image')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <!-- links for favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/favicon//safari-pinned-tab.svg') }}" color="#5bbad5">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>
    @php
        $info_footer = DB::table('information')->first();
    @endphp
    <!-- LOADER START -->
    <div id="loader">
        <div id="loading-status"></div><!-- .loading-status end -->
    </div><!-- #loader end -->

    <!-- Header wrapper start -->
    <div class="header-wrapper header-style-02 header-negative-bottom clearfix">

        <!-- #header start -->
        <header id="header" class="" style="background-color: white !important;">

            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">

                    <!-- .col-md-12 start -->
                    <div class="col-md-12">

                        <!-- .top-bar-wrapper start -->
                        <div class="top-bar-wrapper clearfix">

                            <!-- .row start -->
                            <div class="row">

                                <!-- .col-md-3 start -->
                                <div class="col-md-3">
                                    <!-- .logo start -->
                                    <div id="logo">
                                        <a href="/">
                                            <img src="/img/svg/consultingpress-logo-dark-green.png" alt="Best BMC" />
                                        </a>
                                    </div><!-- .logo -->
                                </div><!-- .col-md-3 end -->

                                <!-- .col-md-9 start -->
                                <div class="col-md-9">
                                    <div class="header-info-widgets hidden-xs hidden-sm">
                                        <ul class="clearfix">
                                            <li>
                                                <div class="icon-container">
                                                    <i class="lynny-phone-1"></i>
                                                </div>

                                                <div class="text-container">
                                                    <span>call us</span>
                                                    <p>
                                                        {{ $info_footer->contacts }}
                                                    </p>
                                                </div><!-- .text-container end -->
                                            </li>

                                            <li>
                                                <div class="icon-container">
                                                    <i class="lynny-mail-duplicate"></i>
                                                </div>

                                                <div class="text-container">
                                                    <span>get in touch</span>
                                                    <a href="mailto:{{ $info_footer->email_contact }}">
                                                        {{ $info_footer->email_contact }}
                                                    </a>
                                                </div><!-- .text-container end -->
                                            </li>

                                            <li>
                                                <div class="icon-container">
                                                    <i class="lynny-globe-2_1"></i>
                                                </div>

                                                <div class="text-container">
                                                    <span>our locations</span>
                                                    <p>
                                                        <a href="/contact">
                                                            Global coverage
                                                        </a>
                                                    </p>
                                                </div><!-- .text-container end -->
                                            </li>
                                        </ul>
                                    </div><!-- .header-info-widgets end -->
                                </div><!-- .col-md-9 end -->
                            </div><!-- .row end -->
                        </div><!-- .top-bar-wrapper end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->

            <!-- .header-inner start -->
            <div class="header-inner">

                <!-- .container start -->
                <div class="container">

                    <!-- .row start -->
                    <div class="row">
                        <!-- .col-md-12 start -->
                        <div class="col-md-12">
                            <!-- .main-nav start -->
                            <div class="main-navigation">
                                <!-- .navbar.navbar-default start -->
                                <nav class="navbar navbar-default nav-left pi-mega">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">

                                        <!-- Responsive navigation buttons -->
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#main-nav" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div><!-- .navbar-header end -->

                                    <!-- MAIN NAVIGATION -->
                                    <div id="main-nav" class="collapse navbar-collapse">

                                        <!-- navigation links start -->
                                        <ul class="nav navbar-nav">
                                            <li class="{{ request()->is('', '/') ? 'current-menu-item' : '' }}">
                                                <a href="/">Acceuil</a>
                                            </li>
                                            <li class="{{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="/about">A propos</a>
                                            </li>
                                            <li
                                                class="menu-item-has-children dropdown {{ request()->is('analyse', 'assistance') ? 'current-menu-item' : '' }}">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"
                                                    role="button">Nos missions</a>

                                                <ul class="dropdown-menu">
                                                    <li><a href="/analyse">Analyse</a></li>
                                                    <li><a href="/assistance">Assistance</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ request()->is('outils') ? 'current-menu-item' : '' }}">
                                                <a href="/outils">Nos Outils</a>
                                            </li>
                                            <li class="{{ request()->is('projets') ? 'current-menu-item' : '' }}">
                                                <a href="/projets">Projets</a>
                                            </li>

                                            {{--  <li class="menu-item-has-children dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"
                                                    role="button">News</a>

                                                <ul class="dropdown-menu">
                                                    <li><a href="management-news-grid.html">News Grid</a></li>
                                                    <li><a href="management-news-list.html">News List</a></li>
                                                    <li><a href="management-news-single.html">News Single</a></li>
                                                </ul>
                                            </li> --}}

                                            <li class="{{ request()->is('contact') ? 'current-menu-item' : '' }}">
                                                <a href="/contact">Contact</a>
                                            </li>
                                    </div><!-- navbar end -->

                                    <div class="nav-additional-links">
                                        <!-- #search start -->
                                        <div id="search">
                                            <form method="post" id="searchyyy" action="/recherche">
                                                @csrf
                                                <input class="search-submit" type="submit" value="recherche">
                                                <input id="m_search" name="m_search" type="text"
                                                    placeholder="Projet, outils">
                                            </form>
                                        </div><!-- #search end -->

                                        <div class="nav-plugins clearfix">
                                            <!-- WPML Languages start -->
                                            <div class="wpml-languages enabled">
                                                <a class="active" href="#">
                                                    <span>en</span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>

                                                <ul class="wpml-lang-dropdown">
                                                    <li>
                                                        <a href="#">fr</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">en</a>
                                                    </li>
                                                </ul><!-- .wpml-lang-dropdown end -->
                                            </div><!-- .wpml-languages.enabled end -->
                                        </div><!-- .nav-plugins end -->
                                    </div><!-- .nav-additional-links -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div> <!-- .main-nav end -->
                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .header-inner end -->
        </header><!-- #header end -->
    </div><!-- .header-wrapper end -->


    @yield('content')








    <!-- #footer-wrapper start -->
    <div id="footer-wrapper">

        <!-- #footer start -->
        <footer id="footer">
            <div class="container">

                <!-- .row start -->
                <div class="row">

                    <!-- .footer-widget-container start -->
                    <ul class="footer-widget-container col-md-3 col-sm-6">

                        <!-- .widget.widget-text start -->
                        <li class="widget widget-text">
                            <a href="management-index.html">
                                <img src="/img/svg/consultingpress-logo-dark-green.png" alt="Best BMC" />
                            </a>
                        </li><!-- .widget.widget-text end -->
                    </ul><!-- .footer-widget-container end -->

                    <!-- .footer-widget-container start -->
                    <ul class="footer-widget-container col-md-3 col-sm-6">

                        <!-- .widget.widget-pages start -->
                        <li class="widget widget-pages">
                            <div class="title">
                                <h3>Nos liens</h3>
                            </div><!-- .title end -->

                            <ul>
                                <li>
                                    <a href="/">Accueil</a>
                                </li>

                                <li>
                                    <a href="/about">A propos de nous</a>
                                </li>

                                <li>
                                    <a href="/projets">Nos projets</a>
                                </li>

                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>

                        </li><!-- .widget.widget-pages end -->
                    </ul><!-- .footer-widget-container end -->

                    <!-- .footer-widget-container start -->
                    @php
                        $projets = App\Models\Projet::orderBy('created_at', 'desc')
                            ->take(2)
                            ->get();
                    @endphp
                    <ul class="footer-widget-container col-md-3 col-sm-6">
                        <li class="widget widget-text">
                            <div class="title">
                                <h3>Latest News</h3>
                            </div>

                            <!-- Latest posts element start -->
                            <ul class="pi-latest-posts-02">
                                @forelse ($projets as $item)
                                    <li class="post-container">
                                        <div class="post-media">
                                            <a href="/projet/post/{{ $item->id }}">
                                                <img src="/uploads/{{ $item->images()->first()->url }}"
                                                    alt="{{ $item->id }}" />
                                            </a>
                                        </div><!-- .post-media end -->

                                        <div class="post-body">
                                            <span class="date">{{ $item->created_at }}</span>
                                            <a href="/projet/post/{{ $item->id }}">
                                                <h4>{{ $item->nom_projet }}</h4>
                                            </a>
                                        </div><!-- .post-body end -->
                                    </li>
                                @empty
                                @endforelse

                            </ul><!-- .pi-latest-posts-02 end -->
                        </li>
                    </ul><!-- .footer-widget-container end -->

                    <!-- .footer-widget-container start -->
                    @if (!is_null($info_footer))
                        <ul class="footer-widget-container col-md-3 col-sm-6">
                            <li class="widget contact-info">
                                <div class="title">
                                    <h3>Contact</h3>
                                </div>

                                <ul class="contact-info-list clearfix">
                                    <li>
                                        <i class="lynny-home"></i>
                                        {{ $info_footer->adresse }}<br />
                                    </li>

                                    <li>
                                        <i class="lynny-phone-1"></i>
                                        @php
                                            $numeros = explode(',', $info_footer->contacts);
                                        @endphp
                                        @forelse ($numeros as $item)
                                            <a href="tel:{{ $item }}">{{ $item }} <br>
                                            @empty
                                        @endforelse
                                    </li>

                                    <li>
                                        <i class="lynny-mail-duplicate"></i>
                                        <a
                                            href="mailto:{{ $info_footer->email_contact }}">{{ $info_footer->email_contact }}</a>
                                    </li>
                                </ul><!-- .contact-info-list end -->
                            </li><!-- .widget.contact-info end -->
                        </ul>
                    @endif
                    <!-- .footer-widget-container end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </footer><!-- #footer end -->

        <!-- #copyright-container start -->
        <div id="copyright-container" class="copyright-container">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-sm-6">
                        <p>
                            Copyright © 2016 bmc
                        </p>
                    </div><!-- .col-md-6 end -->

                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-sm-6 copyright-right">
                        <p>
                            Design and development by <a href="http://www.pixel-industry.com">Ebuild</a>
                        </p>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- #copyright-container end -->

        <a href="#" class="scroll-up">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div><!-- #footer-wrapper end -->






    <!-- Required js scripts -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="{{ asset('js/jquery-core.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-scripts.js') }}"></script>
    <script src="{{ asset('masterslider/masterslider.min.js') }}"></script>
    <script src="{{ asset('owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.map.full.min.js') }}"></script>
    <script src="{{ asset('js/volcanno.map.js') }}"></script>
    <script src="{{ asset('js/jquery-retina.js') }}"></script>
    <script src="{{ asset('js/volcanno.include.js') }}"></script>

    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function($) {
            'use strict';
            // MASTER SLIDER START
            VolcannoInclude.masterSliderInit("mastersliderFullWidth02");

            // INCLUDE OWL CAROUSEL FEATURED PAGES
            VolcannoInclude.owlCarouselInit('featured-pages-carousel');

            // INCLUDE OWL CAROUSEL CLIENT CAROUSEL
            VolcannoInclude.owlCarouselInit('client-carousel');

            // FEATURED PAGES NEGATIVE TOP POSITIONING
            VolcannoInclude.fpNegativeTop();

            //NUMBER COUNTER ANIMATION
            VolcannoInclude.odometerContainerInit();

            //CONTACT FORM AJAX
            VolcannoInclude.contactFormAjax('newsletter');
        });

        jQuery(window).on("load", function() {
            'use strict';
            // IMAGE PARALLAX ANIMATION
            if (!VolcannoInclude.isTouchDevice() || !VolcannoInclude.isIOSDevice()) {
                // POSITIONING NOTE NEGATIVE TOP
                VolcannoInclude.fpNegativeTop();
            }
        });
        /* ]]> */

    </script>
     <script>
        document.getElementById('m_search').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('searchyyy').submit();
            }
        });
    </script>

</body>

</html>
