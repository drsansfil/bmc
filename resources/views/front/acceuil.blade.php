@extends('layouts.front')
@section('title', __('message.btn_accueil'))
@section('content')
    <style>
        .icon_ex {
            width: 100% !important;
        }
    </style>
    <div class="master-slider-wrapper">
        <!-- #masterslider start -->
        <div id="mastersliderFullWidth02" class="master-slider-full-screen master-slider ms-skin-default mb-0">

            <!-- FIRST SLIDE -->
            <div class="ms-slide">
                <img src="/uploads/{{ $info->video }}" data-src="/uploads/{{ $info->video }}"
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
                        top: 260px;"
                    data-type="text" data-effect="left(short)" data-duration="500" data-hide-effect="fade" data-delay="500">
                    @if (app()->getLocale() == 'en')
                        {{ $info->home_message_en }}
                    @else
                        {{ $info->home_message }}
                    @endif

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
            <div class="row">
                <!-- .col-md-12 start -->
                <div class="col-md-12">
                    <!-- .custom-heading-02 start -->
                    <div class="custom-heading-02 text-center">
                        <h2>BEST MANAGEMENT & CONSULTING BMC</h2>
                        <p>
                            {{ __('message.home_1') }}
                        </p>
                        <p>
                            {{ __('message.home_2') }}
                            <br>
                            <b>
                                {{ __('message.home_3') }}
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
                        <h2> {{ __('message.home_4') }}</h2>
                        <span>
                            {{ __('message.home_5') }}
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
                                <h3> {{ __('message.option_1') }}</h3>
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
                                <h3>{{ __('message.option_2') }}</h3>
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
                                <h3>{{ __('message.option_3') }}</h3>
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
                            <img src="/images/Sa polyvalence et pluridisciplinarité-01.svg" class="icon_ex" alt=""
                                srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>{{ __('message.option_4') }}</h3>
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
                                <h3>{{ __('message.option_5') }} <br><br> </h3>
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
                            <img src="/images/réponse dans les meilleurs délais-01.svg" class="icon_ex" alt=""
                                srcset="">
                        </div><!-- .icon-container end -->

                        <div class="text-container">
                            <a href="#">
                                <h3>{{ __('message.option_6') }}</h3>
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
                            <h4>{{ __('message.info_1') }}</h4>
                        </div>

                        <a href="/contact" class="btn icon-animated">
                            <span>
                                <i class="lynny-page-1"></i>
                                {{ __('message.ask') }}
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
                        <span>{{ __('message.txt_4') }}</span>
                        <h2>{{ __('message.ce_que') }}</h2>
                    </div><!-- .custom-heading-01 end -->

                    <p>
                        {{ __('message.home_6') }}
                    </p>

                    <ul class="fa-ul ul-circled">
                        <div class="row">
                            @forelse ($outils as $item)
                                <div class="col-sm-6">
                                    <li>
                                        <div class="icon-container">
                                            <img src="/uploads/{{ $item->icone }}" />
                                        </div><!-- .icon-container end -->

                                        <div class="li-content">
                                            <p>
                                                {{ $item->titre }}
                                            </p>

                                        </div><!-- .li-content end -->
                                    </li>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <a href="/outils" class="read-more">
                            {{ __('message.Plus_outils') }}
                        </a><!-- .read-more end -->

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
                                <div class="odometer" data-to={{ $info->secteur }}></div>
                            </div>
                            <p>
                                {{ __('message.txt_1') }}
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->projet }}></div>
                            </div>
                            <p>
                                {{ __('message.txt_2') }}
                            </p>
                        </div><!-- .odometer-container end -->
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3">

                        <!-- .odometer-container start -->
                        <div class="odometer-container">
                            <div class="odometer-inner">
                                <i class="fa fa-arrow-up"></i>
                                <div class="odometer" data-to={{ $info->partenaire }}></div>
                            </div>
                            <p>
                                {{ __('message.txt_3') }}
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
                                {{ __('message.txt_4') }}
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
                            <h4>{{ __('message.info_2') }}</h4>
                        </div>

                        <a href="/" class="btn icon-animated">
                            <span>
                                <i class="lynny-page-1"></i>
                                {{ __('message.call_us') }}
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
                                                    alt="{{ $item->nom_projet }}" />
                                            </a>
                                        </div><!-- .post-media end -->

                                        <div class="post-body">
                                            <span class="date">{{ $item->created_at }}</span>

                                            <a href="/projet/post/{{ $item->id }}">
                                                @if (app()->getLocale() == 'en')
                                                    <h2>{{ $item->nom_projet_en }} </h2>
                                                @else
                                                    <h2>{{ $item->nom_projet }} </h2>
                                                @endif
                                            </a>

                                            <a href="/projet/post/{{ $item->id }}" class="read-more">
                                                {{ __('message.lire_plus') }}
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
                    <h2>{{ __('message.info_3') }}</h2>
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .widget.widget_newsletterwidget start -->
                    <div class="widget widget_newsletterwidget">

                        <!-- .newsletter.newsletter-widget start -->
                        <div class="newsletter newsletter-widget">
                            <form method="post" action="/store_new" id="monFormulaire">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="email" name="email" required
                                            placeholder="Email">
                                        @csrf
                                        <input class="form-control" type="text" name="nom" required
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-success" value="M'abonner">
                                    </div>
                                </div>
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
    <div class="page-content custom-background  padding-small" style="background-color: #eff3f7 !important;">

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
                                        title="{{ $item->nom_client }}" style="height: 50px !important;" />
                                </div><!-- .owl-item end -->
                            @empty
                            @endforelse
                        </div><!-- .owl-carousel end -->
                    </div><!-- Owl Carousel Container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            // Intercepter l'événement de soumission du formulaire
            $('#monFormulaire').submit(function(e) {
                // Empêcher l'envoi traditionnel du formulaire
                e.preventDefault();

                // Récupérer les données du formulaire
                var formData = $(this).serialize();

                // Envoyer les données au serveur via AJAX
                $.ajax({
                    type: 'POST',
                    url: '/store_new',
                    data: formData,
                    success: function(response) {
                        // Afficher le message de réponse dans une alerte
                        alert(response.message);
                        $('#monFormulaire')[0].reset();
                    },
                    error: function(error) {
                        // En cas d'erreur, afficher un message d'erreur dans une alerte
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                    }
                });
            });
        });
    </script>
@endsection
