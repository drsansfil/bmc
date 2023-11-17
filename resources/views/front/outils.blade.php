@extends('layouts.front')
@section('title', __('message.btn_nos_outils'))
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
                        <h1>{{ __('message.list_tool') }}</h1>
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
                                <span class="active">{{ __('message.btn_nos_outils') }}</span>
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
                        <h2>{{ __('message.work_tool') }}</h2>
                        <span>.</span>
                    </div><!-- .custom-heading-02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
            <br><br>


            <div class="container">
                @forelse ($outils as $index => $item)
                    <div class="row oo p-2">
                        {{-- Colonne pour les grandes tailles d'écran --}}
                        <div class="col-lg-5 order-lg-{{ $index % 2 == 0 ? 1 : 2 }}">
                            <img src="/uploads/{{ $item->image }}" alt="{{ $item->titre }}" class="img-fluid">
                        </div>

                        {{-- Colonne pour les petites tailles d'écran --}}
                        <div class="col-lg-7 order-lg-{{ $index % 2 == 0 ? 2 : 1 }}">
                            <table>
                                <tr>
                                    <td style="width: 22px;">
                                        <img src="/uploads/{{ $item->icone }}" style="height: 20px;" />
                                    </td>
                                    <td>
                                        <h3> {{ $item->titre }}</h3>
                                    </td>
                                </tr>
                            </table>

                            <div class="text-container">
                                @if (app()->getLocale() == 'en')
                                    <p>{{ $item->description_en }}</p>
                                @else
                                    <p>{{ $item->description }}</p>
                                @endif

                            </div>
                        </div>
                    </div>
                @empty
                    {{-- Traitement pour le cas où la liste est vide --}}
                @endforelse


            </div>
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <style>
        .oo:hover {
            box-shadow: -6px -8px 64px -21px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: -6px -8px 64px -21px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -6px -8px 64px -21px rgba(0, 0, 0, 0.75);
        }

        .oo {
            border-radius: 10px;
            padding: 20px;
        }

        .page-content .row {
            margin-bottom: 10px !important;
        }
    </style>
    <br><br><br><br><br>
@endsection
