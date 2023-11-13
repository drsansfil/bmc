@extends('layouts.front')
@section('title', 'Contact')
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
                        <h1>Contact us</h1>
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
                                <span class="active">Contact</span>
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
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .custom-heading03 start -->
                    <div class="custom-heading-03">
                        <h3>Contact us</h3>
                    </div><!-- .custom-heading-03 end -->

                    <form class="wpcf7 wpcf7-contact-us clearfix" method="POST" action="/contacte">
                        <input type="text" required name="name" class="wpcf7-text" id="contact-name" placeholder="Name (required)">
                        <input type="email" required name="email" class="wpcf7-email" id="contact-email" placeholder="Email (required)">
                        <input type="text" required name="phone_number" class="wpcf7-text" id="contact-phone" placeholder="Phone ">
                        <input type="text" required name="subject" class="wpcf7-text" id="contact-subject" placeholder="Subject (required)">
                        <textarea rows="8" name="message" class="wpcf7-textarea" id="contact-message" placeholder="Message (required)"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Ld4VykTAAAAAM_qltIuTg7I0hpcdHjX7j68qpRz"></div>
                        <input type="submit" value="submit" class="wpcf7-submit">
                    </form><!-- .wpcf7.clearfix end -->
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <div id="map" class="map-height-small"></div>

                    <!-- .custom-heading03 start -->
                    <div class="custom-heading-03">
                        <h3>Company info</h3>
                    </div><!-- .custom-heading-03 end -->

                    <ul class="fa-ul default">
                        <li>
                            <i class="lynny-phone-1"></i>
                            <p>
                                @php
                                    $numeros = explode(',', $info->contacts);
                                @endphp
                                @forelse ($numeros as $item)
                                    <a href="tel:{{ $item }}">{{ $item }} <br>
                                    @empty
                                @endforelse
                            </p>
                        </li>

                        <li>
                            <i class="lynny-mail-duplicate"></i>
                            <p>
                                <a href="mailto:{{$info->email_contact}}">{{$info->email_contact}}</a>
                            </p>
                        </li>

                        <li>
                            <i class="lynny-home"></i>
                            <p>
                                {{ $info->adresse}} <br />
                                {{ $info->adresse2}}
                            </p>
                        </li>
                    </ul><!-- .fa-ul.default end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
