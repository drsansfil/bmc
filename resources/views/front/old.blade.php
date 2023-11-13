@extends('layouts.front')
@section('title', __('message.accueil_bt'))
@section('content')
    @foreach ($metiers as $item)
        <style>
            .service-{{ $item->id }}details:after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                color: white;
                background-color: #1a64a8;
                opacity: 0;
                visibility: hidden;
            }

            .service-{{ $item->id }}details:hover:before {
                opacity: 1;
                visibility: visible;
                color: white;
                width: 100%;
            }

            .service-{{ $item->id }}details:hover:after {
                opacity: 0.80;
                color: white;
                visibility: visible;
            }

            .service-{{ $item->id }}details:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                color: white;
                width: 50%;
                height: 100%;
                background-image: url("{{ asset('uploads/' . $item->image) }}");
                background-size: cover;
                opacity: 0;
                visibility: hidden;
                z-index: 0;
            }
        </style>
    @endforeach

    <div class="wrapper" style="margin: 0px !important;">

        <section class="main-slider style2">
            <div class="container">
                <div id="rev_slider_476_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                    data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
                    <div id="rev_slider_476_1" class="rev_slider" style="display:none;" data-version="5.3.0.2">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1648" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                                data-masterspeed="1000" data-thumb="images/slider_banner.jpg" data-rotate="0"
                                data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                                data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                @if ($info->video != '')
                                    @php
                                        $mediaUrl = asset('uploads/' . $info->video);
                                    @endphp
                                    @if (pathinfo($info->video, PATHINFO_EXTENSION) === 'mp4' ||
                                            pathinfo($info->video, PATHINFO_EXTENSION) === 'avi' ||
                                            pathinfo($info->video, PATHINFO_EXTENSION) === 'flv' ||
                                            pathinfo($info->video, PATHINFO_EXTENSION) === 'webm' ||
                                            pathinfo($info->video, PATHINFO_EXTENSION) === 'mkv' ||
                                            pathinfo($info->video, PATHINFO_EXTENSION) === 'ogg')
                                        <video autoplay loop muted playsinline class="rev-slidebg" data-no-retina>
                                            <source src="{{ $mediaUrl }}" type="video/mp4">
                                            Votre navigateur ne prend pas en charge la vidéo.
                                        </video>
                                    @else
                                        <img src="{{ $mediaUrl }}" alt="" data-bgposition="center center"
                                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax=""
                                            class="rev-slidebg" data-no-retina>
                                    @endif
                                @endif


                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption lyr3 tp-resizeme" id="slide-1648-layer-1" data-x="center"
                                    data-hoffset="0" data-y="center" data-voffset="-200" data-width="['auto']"
                                    data-height="['auto']" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[15,15,15,15]" data-paddingleft="[0,0,0,0]" data-start="200"
                                    data-splitin="chars" data-splitout="none" data-elementdelay="0.04" style="">
                                    <div class="container" style="line-height: 10px;">
                                        @if ($info->home_message != '')
                                            “ @php
                                                $words = explode(' ', $info->home_message);
                                                $chunkedWords = array_chunk($words, 3);
                                            @endphp
                                            @foreach ($chunkedWords as $chunk)
                                                <p
                                                    style="color: white;font-weight: bold;font-size: 60px;padding-bottom: 24px;">
                                                    {{ implode(' ', $chunk) }}</p>
                                            @endforeach
                                            ”
                                        @else
                                            “ whatever good <br>things we build end <br />up building us ”
                                        @endif
                                    </div>
                                </div>


                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption lyr4 tp-resizeme" id="slide-1648-layer-2" data-x="center"
                                    data-hoffset="0" data-y="center" data-voffset="-35" data-width="['auto']"
                                    data-height="['auto']" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" data-start="2000"
                                    data-splitin="chars" data-splitout="none" data-elementdelay="0.06" style="">
                                </div>
                                <!-- LAYER NR. 3 -->
                                <a href="/contact" title="" class="tp-caption layera stt2 tp-resizeme"
                                    id="slide-1-layer-3" data-x="center" data-hoffset="0" data-y="center"
                                    data-voffset="60		" data-width="['auto','auto','auto','auto']"
                                    data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;"
                                    data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{}]'
                                    data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[20,20,20,20]" data-paddingleft="[20,20,20,20]" data-start="1500"
                                    data-splitin="none" data-splitout="none" data-elementdelay="0.05"
                                    style="">{{ __('message.contactez_nous_bt') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--Revolution Slider end-->
                <div class="cntct-info">
                    <div class="container">
                        <div class="cntct-info-details">
                            <div class="our-addrs-info">
                                <ul>
                                    <li>
                                        @if ($info->email_contact != '')
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/ios-filled/50/FFFFFF/new-post.png"
                                                alt="new-post" />
                                            <strong> {{ $info->email_contact }}</strong>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($info->contacts != '')
                                            <img width="20" height="20"
                                                src="https://img.icons8.com/glyph-neue/64/FFFFFF/phone.png"
                                                alt="phone" />
                                            <strong class="scnd"> {{ $info->contacts }}</strong>
                                        @endif

                                    </li>
                                </ul>
                            </div><!--our-addrs-info end-->
                            <div class="soc-links">
                                <ul>
                                    <li>{{ __('message.suivre_txt') }}:</li>
                                    @if ($info->facebook)
                                        <li><a href="{{ $info->facebook }}" title="">
                                                <i class="fa fa-facebook"></i></a>
                                        </li>
                                    @endif
                                    @if ($info->instagram)
                                        <li><a href="{{ $info->instagram }}" title="">
                                                <i class="fa fa-instagram"></i></a>
                                        </li>
                                    @endif
                                    @if ($info->linkedin)
                                        <li><a href="{{ $info->linkedin }}" title="">
                                                <i class="fa fa-linkedin"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div><!--cntct-info-details end-->
                    </div>
                </div><!--cntct-info end-->
            </div>
        </section><!--main-slider end-->


        <main class="lght">

            <section class="mg-top-minus">
                <div class="container3">
                    <div class="block">
                        <div class="fixed-bg bg2"></div>
                        <div class="why-choose-us">
                            <div class="title-sm">
                                <h3>{{ __('message.pourquoi_nous_txt') }}</h3>
                            </div><!--title-sm end-->
                            <div class="our-specifications">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="spec-hd">
                                            <h2>{{ __('message.texte_1') }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="properties">
                                            <div class="choosing-que">
                                                <h3>{{ __('message.texte_2') }}</h3>
                                                <p>{{ __('message.texte_3') }}</p>
                                            </div><!--choosing-que end-->
                                            <div class="choosing-que">
                                                <h3>{{ __('message.texte_4') }}</h3>
                                                <p>{{ __('message.texte_5') }}</p>
                                            </div><!--choosing-que end-->
                                            <div class="choosing-que">
                                                <h3>{{ __('message.texte_6') }}</h3>
                                                <p>{{ __('message.texte_7') }}</p>
                                            </div><!--choosing-que end-->
                                        </div><!--properties end-->
                                    </div>
                                </div>
                            </div><!--our-specifications end-->
                        </div><!--why-choose-us end-->
                    </div>
                </div>
            </section>



            <section>
                <div class="block remove-btm-gap">
                    <div class="container">
                        <div class="title-sm">
                            <h3>our spercialization</h3>
                        </div><!-- title-sm end-->
                        <div class="specialization-data">
                            @forelse ($projectCategories as $key => $item)
                                @if ($key % 2 == 0)
                                    <div class="specialization">
                                        <div class="spec-details">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="spec-img">
                                                        <figure>
                                                            <img src="{{ asset('uploads') }}/{{ $item->image }}"
                                                                alt="">
                                                            {{-- <img src="http://via.placeholder.com/582x375" alt=""> --}}
                                                        </figure>
                                                    </div><!--spec-img end-->
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="spec-text right-bdr right">
                                                        <h3>{{ $item->nom }}</h3>
                                                        <p>
                                                            {{ strlen(strip_tags($item->description)) > 200 ? substr(strip_tags($item->description), 0, 200) . '...' : strip_tags($item->description) }}
                                                        </p>
                                                        <a href="/secteur/{{ $item->id }}"
                                                            title="">{{ __('message.voir_plus_txt') }}</a>
                                                        {{-- <a href="#" title="">Learn More</a> --}}
                                                    </div><!--spec-text end-->
                                                </div>
                                            </div>
                                        </div><!--spec-details end-->
                                    </div><!--specialization end-->
                                @else
                                    <div class="specialization">
                                        <div class="spec-details">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="spec-text right-bdr right">
                                                        <h3>{{ $item->nom }}</h3>
                                                        <p>
                                                            {{ strlen(strip_tags($item->description)) > 200 ? substr(strip_tags($item->description), 0, 200) . '...' : strip_tags($item->description) }}
                                                        </p>
                                                        <a href="/secteur/{{ $item->id }}"
                                                            title="">{{ __('message.voir_plus_txt') }}</a>
                                                        {{-- <a href="#" title="">Learn More</a> --}}
                                                    </div><!--spec-text end-->
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="spec-img">
                                                        <figure>
                                                            <img src="{{ asset('uploads') }}/{{ $item->image }}"
                                                                alt="">
                                                            {{-- <img src="http://via.placeholder.com/582x375" alt=""> --}}
                                                        </figure>
                                                    </div><!--spec-img end-->
                                                </div>
                                            </div>
                                        </div><!--spec-details end-->
                                    </div><!--specialization end-->
                                @endif
                            @empty
                            @endforelse
                            {{--   <div class="specialization style2">
                                <div class="spec-details">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="spec-text bfr ep-icon">
                                                <h3>Renovation</h3>
                                                <p>The way we undertake projects is based on permanently applying values
                                                    that reinforce each other...</p>
                                                <a href="#" title="">Learn More</a>
                                            </div><!--spec-text end-->
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="spec-img">
                                                <figure>
                                                    <img src="http://via.placeholder.com/670x460" alt="">
                                                </figure>
                                            </div><!--spec-img end-->
                                        </div>
                                    </div>
                                </div><!--spec-details end-->
                            </div><!--specialization end--> --}}
                            {{--  <div class="specialization style3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="spec-img">
                                            <figure>
                                                <img src="http://via.placeholder.com/392x620" alt="">
                                            </figure>
                                        </div><!--spec-img end-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="spec-text right-bdr left ep-icon bt">
                                            <h3>Interior & Exterior</h3>
                                            <p>For each project we establish relationships with partners who we know will
                                                help us create added value for your project. As well as bringing together
                                                the public and private sectors, we make sector-overarching links to gather
                                                knowledge and to learn from each other. The way we undertake projects is
                                                based on permanently applying.</p>
                                            <a href="#" title="">Learn More</a>
                                            <ul>
                                                <li><a href="#" title="">view More</a></li>
                                                <li><a href="#" title="">our Services</a></li>
                                            </ul>
                                        </div><!--spec-text end-->
                                    </div>
                                </div>
                            </div> --}}
                        </div><!--specialization-data end-->
                    </div>
                </div>
            </section>

            <section>
                <div class="block">
                    <br><br>
                    <div class="container">
                        <h3>{{ __('message.metiers_bt') }}</h3>
                    </div><!--title-sm end-->
                    <br>
                    <div class="container no-pd">
                        <div class="our-services">
                            <div class="row">
                                @foreach ($metiers as $item)
                                    <div class="col-lg-4 col-md-6 col-sm-6 pb-4 pt-3 info-metier-div info-metier-div2">
                                        <div class="os-{{ $item->id }}">
                                            <div class="service-{{ $item->id }}details">

                                                <div class="service-info">
                                                    <a href="/metier/{{ $item->id }}">
                                                        <div class="srvc-icon">
                                                            @if ($item->icone != '')
                                                                <img src="{{ asset('uploads') }}/{{ $item->icone }}"
                                                                    alt="{{ $item->titre }}"
                                                                    style="width: 40px; height: 40px;">
                                                            @endif
                                                            <h3 class="titre-metier">{{ $item->titre }}</h3>
                                                        </div>
                                                    </a>
                                                    <p>
                                                    <div class="descrip-metier2">
                                                        {!! strlen($item->description) > 130 ? substr(strip_tags($item->description), 0, 130) . '...' : strip_tags($item->description) !!}
                                                    </div>
                                                    </p>
                                                </div>

                                            </div><!-- service-details end-->
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div><!--our-services end-->
                    </div>
                </div>
            </section>
            <style>
                .info-metier-div2:hover .descrip-metier2 {
                    color: white !important;
                }

                .info-metier-div:hover .titre-metier {
                    color: white !important;
                }
            </style>
            <section>
                <div class="block remove-btm-gap">
                    <div class="container">
                        <h3>{{ __('message.texte_8') }}</h3>
                    </div><!--title-sm end-->
                    <div class="house-imgs-slides style2 no-pd">
                        <div class="house-slider style2">
                            @forelse ($projets as $item)
                                <div class="house-slide">
                                    <img src="{{ asset('uploads') }}/{{ $item->images->first()->url }}"
                                        alt="{{ $item->titre }}">
                                    <div class="hs-info">
                                        <div class="container">
                                            <h3>{{ $item->nom_projet }}</h3>
                                            <a href="/projets" title="">{{ __('message.voir_plus_txt') }}<i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div><!--hs-info end-->
                                </div><!--house-slide end-->
                            @empty
                            @endforelse
                        </div><!--house-slider end-->
                    </div><!--house-imgs-slides end-->
                </div>
            </section>

            <section>
                <div class="block remove-btm-gap">
                    <br>
                    <div class="container text-center">
                        <h3>{{ __('message.actualites_bt') }}</h3>
                        <div class="trending-stories">
                            <div class="row">
                                @forelse ($blogs as $item)
                                    <div class="col-lg-6">
                                        <div class="tr-news">
                                            <div class="tr-news-img">
                                                <img src="{{ asset('uploads') }}/{{ $item->image }}" alt="">
                                            </div><!--tr-news-img end-->
                                            <div class="treding-new">
                                                <h5>{{ $item->nom }}</h5>
                                                <h3><a href="/blog/post/{{ $item->id }}"
                                                        title="">{{ $item->nom }}</a></h3>
                                                <p>{!! strlen($item->description) > 91 ? substr($item->description, 0, 91) . '...' : $item->description !!}
                                                </p>
                                                <span>{{ $item->created_at }} {{ __('message.by') }} <a
                                                        href="/blog/post/{{ $item->id }}">Teraco</a></span>
                                            </div><!--treding-new end-->
                                        </div><!--tr-news end-->
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div><!--trending-stories end-->
                    </div>
                </div>
            </section>



            <section>
                <div class="block no-padding">
                    <div class="container p-3">
                        <br><br><br>

                    </div>
                </div>
            </section>


            <section style="background-color: #f3f3f3;">
                <div class="block">
                    <div class="container">
                        <div class="director-info">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="contractor-details">
                                        @isset($directeur)
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="director-img">
                                                        <img src="{{ asset('uploads/' . $directeur->image) }}"
                                                            style="width: 100%" alt="">
                                                    </div><!--director-img end-->
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="director-details">
                                                        <h3>{{ $directeur->nom }}</h3>
                                                        <span>{{ $directeur->poste }}</span>
                                                        <p>{{ $directeur->description }}</p>
                                                        <ul>
                                                            @if ($directeur->facebook)
                                                                <li><a href="{{ $directeur->facebook }}" title="">
                                                                        <i class="fa fa-facebook"></i></a>
                                                                </li>
                                                            @endif
                                                            @if ($directeur->instagram)
                                                                <li><a href="{{ $directeur->instagram }}" title="">
                                                                        <i class="fa fa-instagram"></i></a>
                                                                </li>
                                                            @endif
                                                            @if ($directeur->linkedin)
                                                                <li><a href="{{ $directeur->linkedin }}" title="">
                                                                        <i class="fa fa-linkedin"></i></a>
                                                                </li>
                                                            @endif
                                                            @if ($directeur->email)
                                                                <li><a href="MailTo:{{ $directeur->email }}" title="">
                                                                        <i class="fa fa-envelope"></i></a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div><!--director-details end-->
                                                </div>
                                            </div>
                                        @endisset
                                    </div><!--contractor-details end-->
                                </div>
                            </div>
                        </div><!--director-info end-->

                    </div>
                </div>

            </section>

        </main>


    </div><!--wrapper end-->

@endsection
