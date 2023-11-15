@extends('layouts.front')
@section('title', 'Accueil')
@section('content')
<style>
    .icon_ex{
        width: 100% !important;
    }
</style>
    <div class="master-slider-wrapper">
        <!-- #masterslider start -->
        <div id="mastersliderFullWidth02" class="master-slider-full-screen master-slider ms-skin-default mb-0">

            <!-- FIRST SLIDE -->
            <div class="ms-slide">
                <img src="/uploads/{{ $info->video }}"
                    data-src="/uploads/{{ $info->video }}"
                    alt="ConsultignPress Unlock Your Business Potential" />
                <span class="ms-layer pi-caption-small"
                    style="

                          left: 0;
                          top: 200px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="0">
                    BEST BMC
                </span>

                <h2 class="ms-layer pi-caption"
                    style="
                    text-shadow: -2px -2px 8px rgba(3, 3, 5, 1);
                        left: 0;
                        top: 260px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="500">
                    {{ $info->home_message}}
                </h2>

                <a href="/contact"></a>

            </div><!-- END OF FIRST SLIDE -->

            {{-- <!-- SECOND SLIDE -->
            <div class="ms-slide">
                <img src="masterslider/blank.gif"
                    data-src="img/slider/consultingpress-management-consulting-shape-your-business-future.jpg"
                    alt="ConsultingPress Management Consulting" />
                <span class="ms-layer pi-caption-small"
                    style="
                          left: 0;
                          top: 200px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="0">
                    management consulting
                </span>

                <h2 class="ms-layer pi-caption"
                    style="
                        left: 0;
                        top: 260px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="500">
                    Shape Your
                </h2>

                <h2 class="ms-layer pi-caption"
                    style="
                        left: 0;
                        top: 340px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="800">
                    Business Future
                </h2>

                <img class="ms-layer pi-link-arrow" src="masterslider/blank.gif" data-src="img/slider/circle-icon-green.svg"
                    alt="" style="
                         left: 0;
                         top: 445px;"
                    data-type="image" data-effect="left(short)" data-duration="500" data-hide-effect="fade"
                    data-delay="1100" />

                <span class="ms-layer pi-link"
                    style="
                          left: 55px;
                          top: 445px;" data-type="text"
                    data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="1100">
                    Learn more
                </span>

                <a href="management-services-image-grid.html"></a>

            </div><!-- END OF SECOND SLIDE --> --}}


        </div><!-- #master-slider end -->
    </div><!-- .master-slider-wrapper end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row featured-pages-negative-top">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- Owl Carousel Container start -->
                    <div class="carousel-container">
                        <div id="featured-pages-carousel" class="owl-carousel">
                            <!-- .owl-item start -->
                            <div class="owl-item">
                                <div class="featured-page-box">
                                    <div class="media">
                                        <img src="img/pics/consultingpress-leading-management-consulting-company.jpg"
                                            alt="ConsultingPress Leading Management Consulting Company" />
                                    </div>

                                    <div class="body">
                                        <a href="management-about.html">
                                            <h2>
                                                ConsultingPress - Leading Management
                                                Consulting company
                                            </h2>
                                        </a>
                                    </div><!-- .body end -->
                                </div><!-- .featured-page-box end -->
                            </div><!-- .owl-item end -->

                            <!-- .owl-item start -->
                            <div class="owl-item">
                                <div class="featured-page-box">
                                    <div class="media">
                                        <img src="img/pics/consultingpress-increasing-your-business-value-with-our-expertise.jpg"
                                            alt="ConsultingPress Increasing your business productivity using our expertise" />
                                    </div>

                                    <div class="body">
                                        <a href="management-services-image-grid.html">
                                            <h2>
                                                Increasing your business productivity
                                                using our expertise
                                            </h2>
                                        </a>
                                    </div><!-- .body end -->
                                </div><!-- .featured-page-box end -->
                            </div><!-- .owl-item end -->

                            <!-- .owl-item start -->
                            <div class="owl-item">
                                <div class="featured-page-box">
                                    <div class="media">
                                        <img src="img/pics/consultingpress-serving-big-and-small-companies-worldwide.jpg"
                                            alt="ConsultingPress Serving small and big companies worldwide" />
                                    </div>

                                    <div class="body">
                                        <a href="management-industry-sectors.html">
                                            <h2>
                                                Serving small and big
                                                companies worldwide
                                            </h2>
                                        </a>
                                    </div><!-- .body end -->
                                </div><!-- .featured-page-box end -->
                            </div><!-- .owl-item end -->

                            <!-- .owl-item start -->
                            <div class="owl-item">
                                <div class="featured-page-box">
                                    <div class="media">
                                        <img src="img/pics/consultingpress-over-20-years-of-consulting-services-experience.jpg"
                                            alt="ConsultingPress Over 20 years of experience and 250 case studies" />
                                    </div>

                                    <div class="body">
                                        <a href="management-cases-grid.html">
                                            <h2>
                                                Over 20 years of experience and
                                                250 case studies conducted
                                            </h2>
                                        </a>
                                    </div><!-- .body end -->
                                </div><!-- .featured-page-box end -->
                            </div><!-- .owl-item end -->
                        </div><!-- .owl-carousel end -->
                    </div><!-- Owl Carousel Container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">


            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- .custom-heading-02 start -->
                    <div class="custom-heading-02 text-center">
                        <h2>BEST MANAGEMENT & CONSULTING BMC</h2>
                        <p>
                            Notre cabinet, implanté à Tunis, depuis 2009 est spécialisé dans l’accompagnement et
                            l’assistance des entreprises publiques ou privées.
                        </p>
                        <p>
                            Dans ce cadre d'activité, on organise des séminaires de formation professionnelle continue en
                            inter ou en intra-entreprise, et on s'occupe au mise à niveau des entreprises, appelées à agir
                            dans un milieu de plus en plus concurrentiel.
                            <br>
                            <b>
                                Nos services ont par conséquent pu acquérir l'expérience et la compétence pour étudier,
                                planifier, estimer le budget nécessaire à de telles opérations et conduire ou accompagner un
                                projet de la phase d'étude jusqu'à son terme.
                            </b>
                        </p>
                    </div><!-- .custom-heading-02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- .custom-heading-02 start -->
                    <div class="custom-heading-02">
                        <h2>NOTRE EQUIPE</h2>
                        <span>
                            Nous pouvons donner les meilleures solutions avec une équipe composée d’experts proches des
                            préoccupations des responsables et rompus aux exigences de leur métier. Notre équipe est
                            compétente pour développer et mettre en place des solutions adaptées aux besoins de nos clients
                            et apporter des réponses sur mesure.
                        </span>
                    </div><!-- .custom-heading-02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <!-- .row start -->
            <div class="row mb-30">


                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/experience-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>Son expérience</h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>
                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/disponibilité-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>Sa disponibilité</h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>
                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/intégrité-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>Son intégrité</h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>
                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/Sa polyvalence et pluridisciplinarité-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>Sa polyvalence et pluridisciplinarité</h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>
                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/écoute-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>L’écoute du client <br><br> </h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>
                <div class="col-md-4">
                    <!-- .service-feature-box-03 start -->
                    <div class="service-box service-box-03">
                        <div class="icon-container">
                            <img src="/images/réponse dans les meilleurs délais-01.svg" class="icon_ex" alt="" srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>La réponse dans les meilleurs délais</h3>
                            </a>
                            <p>
                                Defining your business goals and steps to achieve them.
                            </p>
                        </div><!-- .text-container end -->
                    </div><!-- .service-feature-box-03 end -->
                </div>



            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content custom-background bkg-color-light-grey padding-small mb-120">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- note start -->
                    <div class="call-to-action clearfix">
                        <div class="text">
                            <h4>We’ll identify your needs and enhance your business growth.</h4>
                        </div>

                        <a href="management-contact-compact.html" class="btn icon-animated">
                            <span>
                                <i class="lynny-page-1"></i>
                                request a quick quote
                            </span>
                        </a>
                    </div><!-- .call-to-action end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .custom-heading-01 start -->
                    <div class="custom-heading-01">
                        <span>ce que nous utilisons</span>
                        <h2>Nos Outils</h2>
                    </div><!-- .custom-heading-01 end -->

                    <p>
                        We have deep understanding and experience in
                        implementing sustainable strategies in following
                        industry sectors:
                    </p>

                    <ul class="fa-ul ul-circled">
                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Aerospace & Defense" />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    5S
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Energy & Chemicals" />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    KAIZEN
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Transport & Logistics" />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    KANBAN
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Communications " />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    QRQC
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Banking and Finance" />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    SMED
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container">
                                <img src="img/svg/svg-icon-cargo.svg" alt="Education & Non-profit" />
                            </div><!-- .icon-container end -->

                            <div class="li-content">
                                <p>
                                    LEAN
                                </p>
                            </div><!-- .li-content end -->
                        </li>
                    </ul>


                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <div class="triggerAnimation animated" data-animate="fadeInRight">
                        <img src="img/pics/consultingpress-management-consulting-industry-sectors.jpg"
                            alt="ConsultingPress Management Copnsulting Industry Sectors" />
                    </div>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content custom-background bkg-img05 dark">
        <div class="page-content-mask"></div>

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->secteur}}></div>
                            </div>
                            <p>
                                Secteurs
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->projet}}></div>
                            </div>
                            <p>
                                Projets
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->partenaire}}></div>
                            </div>
                            <p>
                                Partenaires
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->client }}></div>
                            </div>
                            <p>
                                Clients satisfaits
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->


    <!-- .page-conent start -->
    <div class="page-content custom-background bkg-color-light-grey padding-small mb-120">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- note start -->
                    <div class="call-to-action clearfix">
                        <div class="text">
                            <h4>Always searching for fresh talents. Send us your resume via email.</h4>
                        </div>

                        <a href="management-contact-compact.html" class="btn icon-animated">
                            <span>
                                <i class="lynny-page-1"></i>
                                connect with us
                            </span>
                        </a>
                    </div><!-- .call-to-action end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- Owl Carousel Container start -->
                    <div class="carousel-container">
                        <div id="latest-posts-carousel" class="owl-carousel pi-latest-posts-01">

                            @forelse ($projets as $item)
                                <!-- .owl-item start -->
                                <div class="owl-item">
                                    <div class="post-container clearfix">
                                        <div class="post-media">
                                            <a href="/projet/post/{{ $item->id }}">
                                                <img src="/uploads/{{ $item->images()->first()->url }}"
                                                    alt="{{ $item->nom_projet}}" />
                                            </a>
                                        </div><!-- .post-media end -->

                                        <div class="post-body">
                                            <span class="date">{{ $item->created_at}}</span>

                                            <a href="management-news-single.html">
                                                <h3>{{ $item->nom_projet}}</h3>
                                            </a>

                                            <a href="/projet/post/{{ $item->id }}" class="read-more">
                                                Read more
                                            </a><!-- .read-more end -->
                                        </div><!-- .post-body end -->
                                    </div><!-- .post-container end -->
                                </div><!-- .owl-item end -->
                            @empty
                            @endforelse

                        </div><!-- .owl-carousel end -->
                    </div><!-- Owl Carousel Container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content custom-background bkg-color-light-grey padding-small">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <h2>Subscribe for our latest news & insights</h2>
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .widget.widget_newsletterwidget start -->
                    <div class="widget widget_newsletterwidget">

                        <!-- .newsletter.newsletter-widget start -->
                        <div class="newsletter newsletter-widget">
                            <form>
                                <input class="email" type="email" placeholder="Subscribe to our newsletter...">
                                <input type="submit" class="submit" value="subscribe">
                            </form>
                        </div><!-- .newsletter.newsletter-widget end -->
                    </div><!-- .widget.widget_newsletterwidget end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container-fluid">

            <!-- .row start -->
            <div class="row mb-0">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <div id="map" class="map-height-lg"></div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- .page-conent start -->
    <div class="page-content custom-background bkg-color-dark padding-small">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">

                <!-- .col-md-12 start -->
                <div class="col-md-12">

                    <!-- Owl Carousel Container start -->
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel">
                            <!-- .owl-item start -->
                            @forelse ($clients as $item)
                                <div class="owl-item">
                                    <img src="/uploads/{{ $item->logo }}" alt="{{ $item->nom_client }}"
                                        title="{{ $item->nom_client }}" />
                                </div><!-- .owl-item end -->
                            @empty
                            @endforelse
                        </div><!-- .owl-carousel end -->
                    </div><!-- Owl Carousel Container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->



@endsection
