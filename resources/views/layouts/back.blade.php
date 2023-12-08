<!doctype html>
<html lang="en" dir="ltr">

<head>
    <title> @yield('title')</title>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon" sizes="57x57" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/svg/consultingpress-logo-dark-green.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/svg/consultingpress-logo-dark-green.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/svg/consultingpress-logo-dark-green.png">

    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
    <!-- TITLE -->

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assetsadmin/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assetsadmin/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('assetsadmin/colors/color1.css') }}" />
    <link href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />



    @yield('css')
</head>

<body class="app sidebar-mini ltr light-mode">
    @yield('content')
    <!-- GLOBAL-LOADER -->

    <!-- /GLOBAL-LOADER -->
    <!-- app-Header -->
    <div class="app-header header sticky">
        <div class="container-fluid main-container">
            <div class="d-flex">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                    href="javascript:void(0)"></a>
                <!-- sidebar-toggle-->
                <a class="logo-horizontal " href="/admin/dashboard">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img light-logo1" alt="logo">
                </a>
                <!-- LOGO -->

                <div class="d-flex order-lg-2 ms-auto header-right-icons">
                    <div class="dropdown d-none">
                        <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                            <i class="fe fe-search"></i>
                        </a>
                        <div class="dropdown-menu header-search dropdown-menu-start">
                            <div class="input-group w-100 p-2">
                                <input type="text" class="form-control" placeholder="Search....">
                                <div class="input-group-text btn btn-primary">
                                    <i class="fe fe-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SEARCH -->
                    <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                    </button>
                    <div class="navbar navbar-collapse responsive-navbar p-0">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2">
                                <div class="">
                                </div>
                                <div class="d-flex country">
                                    <a class="nav-link icon text-center" href="/">
                                        <i class="fe fe-globe"></i><span class="fs-16 ms-2 d-none d-xl-block">Front
                                            office</span>
                                    </a>
                                </div>
                                <!-- COUNTRY -->
                                <div class="d-flex country">
                                    <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                        <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                        <span class="light-layout"><i class="fe fe-sun"></i></span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->
                                <div class="">
                                </div>
                                <!-- CART -->
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="fe fe-minimize fullscreen-button"></i>
                                    </a>
                                </div>
                                <!-- FULL-SCREEN -->
                                <div class="">

                                </div>
                                <!-- NOTIFICATIONS -->
                                <!-- SIDE-MENU -->
                                <div class="dropdown d-flex profile-1">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                        class="nav-link leading-none d-flex">
                                        <img src="{{ asset('assetsadmin/images/users/images.png') }}"
                                            alt="profile-user" class="avatar  profile-user brround cover-image">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                            <div class="text-center">
                                                <h5 class="text-dark mb-0 fs-14 fw-semibold">Admin</h5>

                                            </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="/admin/profile">
                                            <i class="dropdown-icon fe fe-user"></i> Profil
                                        </a>


                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">

                                            <i class="dropdown-icon fe fe-alert-circle"></i> Déconnexion
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /app-Header -->
    <!--app-sidbar-->
    <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
            <div class="side-header">
                <a class="header-brand1" href="/admin/dashboard">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img toggle-logo" alt="logo">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img light-logo" alt="logo">
                    <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png') }}"
                        class="header-brand-img light-logo1" alt="logo">
                </a>
                <!-- LOGO -->
            </div>
            <div class="main-sidemenu">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg></div>
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>Main</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/dashboard') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/dashboard"><i
                                class=" fe fe-home"></i>&nbsp<span class="side-menu__label">Dashboard</span></a>
                    </li>
                    <li class="sub-category">
                        <h3>Management</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('index_client','ajout_client') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/index_client"><i
                                class=" fe  fe-users"></i>&nbsp<span class="side-menu__label">Partenaires</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('index_information','config_mail','directeur') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/index_information"><i
                                class=" fe  fe-info"></i>&nbsp<span class="side-menu__label">Informations</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('index_newslettre','ajout_newslettre') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/index_newslettre"><i
                                class=" fe fe-mail"></i>&nbsp<span class="side-menu__label">Newslettres</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/analyse','admin/ajouter_analyse','admin/update_analyse/*') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/analyse">
                            <i class="bi bi-folder2-open"></i> &nbsp<span class="side-menu__label">Analyse</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/assistance','admin/ajouter_assistance','admin/update_assistance/*') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/assistance">
                            <i class="bi bi-folder2-open"></i> &nbsp<span class="side-menu__label">Assistance</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/outils','admin/ajouter_outils','admin/update_outils/*') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/outils">
                            <i class="bi bi-folder2-open"></i> &nbsp<span class="side-menu__label">Nos outils</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/project_category','admin/project_category/create') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/project_category"><i
                                class="  fe fe-edit"></i> &nbsp<span class="side-menu__label">Secteur d'activité</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item {{ request()->is('admin/contacts') ? 'active-menu' : '' }}" data-bs-toggle="slide" href="/admin/contacts">
                            <i class="bi bi-telephone-inbound"></i> &nbsp<span class="side-menu__label">Contacts </span></a>
                    </li>

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg></div>
            </div>
        </div>

        <!--/APP-SIDEBAR-->
    </div>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © <span id="year"></span> <a href="javascript:void(0)">Ebuild</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="{{ asset('assetsadmin/plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/summernote.js') }}"></script>



    <style>
        .active-menu{
            border-left: solid 5px #279c31;
            background-color: #f0f0f5;
        }
    </style>

    <!-- JQUERY JS -->
    <script src="{{ asset('assetsadmin/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assetsadmin/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('assetsadmin/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assetsadmin/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assetsadmin/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assetsadmin/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assetsadmin/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assetsadmin/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('assetsadmin/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assetsadmin/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('assetsadmin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('assetsadmin/js/apexcharts.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- C3 CHART JS -->
    <script src="{{ asset('assetsadmin/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/charts-c3/c3-chart.js') }}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{ asset('assetsadmin/js/charts.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('assetsadmin/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('assetsadmin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('assetsadmin/plugins/sidemenu/sidemenu.js') }}"></script>
    <!--date table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> --}}

    <script src="{{ asset('assetsadmin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('assetsadmin/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assetsadmin/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assetsadmin/js/custom.js') }}"></script>









    @yield('js')
</body>

</html>
