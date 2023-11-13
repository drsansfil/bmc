<!doctype html>
<html lang="en" dir="ltr">
<head>
    <title> @yield('title')</title>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico')}}" />
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assetsadmin/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assetsadmin/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assetsadmin/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assetsadmin/colors/color1.css')}}" />

</head>
<body class="app sidebar-mini ltr" >
 <!-- JQUERY JS -->
 <script src="{{ asset('assetsadmin/js/jquery.min.js')}}"></script>

 <!-- BOOTSTRAP JS -->
 <script src="{{ asset('assetsadmin/plugins/bootstrap/js/popper.min.js')}}"></script>
 <script src="{{ asset('assetsadmin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

 <!-- SHOW PASSWORD JS -->
 <script src="{{ asset('assetsadmin/js/show-password.min.js')}}"></script>

 <!-- GENERATE OTP JS -->
 <script src="{{ asset('assetsadmin/js/generate-otp.js')}}"></script>

 <!-- Perfect SCROLLBAR JS-->
 <script src="{{ asset('assetsadmin/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

 <!-- Color Theme js -->
 <script src="{{ asset('assetsadmin/js/themeColors.js')}}"></script>

 <!-- CUSTOM JS -->
 <script src="{{ asset('assetsadmin/js/custom.js')}}"></script>
 <main class="py-4">
    @yield('content')
</main>
</body>
</html>