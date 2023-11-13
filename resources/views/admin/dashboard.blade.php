@extends('layouts.back')
@section('title', 'Dashboard_admin')
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard </h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->
                        <br><br>
                        <h3>Bienvenu, <b>{{ Auth()->user()->name }}</b></h3>

                        <!-- ROW-1 -->
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-folder-minus fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Projets</div>
                                                    <div class="circle-tile-number text-faded ">{{ $stats['projects'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-edit fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Blog Posts </div>
                                                    <div class="circle-tile-number text-faded ">{{ $stats['posts'] }}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fe fe-mail fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Abonnés </div>
                                                    <div class="circle-tile-number text-faded ">
                                                        {{ $stats['subscribers'] }}</div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-2 col-sm-6">
                                            <div class="circle-tile ">
                                                <a href="#">
                                                    <div class="circle-tile-heading orange"><i
                                                            class="fa fa-info fa-fw fa-3x"></i></div>
                                                </a>
                                                <div class="circle-tile-content red">
                                                    <div class="circle-tile-description text-faded"> Nbr Référence </div>
                                                    <div class="circle-tile-number text-faded ">15</div>

                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=" row p-5 ">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Analyse des visiteurs</h3>
                                </div>
                                <div class="card chart-container">
                                    {!! $visitorsChart->renderHtml() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {!! $visitorsChart->renderChartJsLibrary() !!}
    {!! $visitorsChart->renderJs() !!}
@endsection
