@extends('layouts.front')
@section('title', 'Recherche')
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
                        <h1>Recherche</h1>
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
                                <span class="active">Recherche</span>
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
                                <h4>Résultat de la recherche</h4>
                            </div><!-- .custom-heading-01 end -->


                            <table style="width: 100%">
                                @forelse ($projets as $item)
                                    <tr>
                                        <td>
                                            <img src="/uploads/{{ $item->images()->first()->url }}"
                                            alt="{{ $item->nom_projet }}" style="width: 100px;" />
                                            <a href="/projet/post/{{ $item->id }}" class="read-more">
                                                <b>{{ $item->nom_projet }}</b>
                                            </a><br>
                                            {!! strlen($item->description) > 120 ? substr($item->description, 0, 120) . '...' : $item->description !!}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse


                                @forelse ($outils as $item)
                                <tr>
                                    <td>
                                        <img src="/uploads/{{ $item->image }}"
                                            alt="{{ $item->titre}}" style="width: 100px;" />
                                        <a href="/outils" class="read-more">
                                            <b>{{ $item->titre }}</b>
                                        </a> <br>
                                        {!! strlen($item->description) > 120 ? substr($item->description, 0, 120) . '...' : $item->description !!}
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </table>


                        </div><!-- .col-md-12 end -->
                    </div><!-- .row end -->


                </div><!-- .col-md-8 end -->

                <aside class="col-md-4 aside-right">

                    <!-- .aside-widgets start -->
                    <ul class="aside-widgets">
                        <li class="widget widget_nav_menu clearfix">
                            <div class="title">
                                <h3>Nos missions</h3>
                            </div><!-- .title end -->

                            <!-- .menu-quick-links-container start -->
                            <div class="menu-quick-links-container">
                                <ul id="menu-quick-links" class="menu">
                                    <li class="menu-item current-menu-item">
                                        <a href="/analyse">Analyse</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/assistance">Assistance</a>
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
