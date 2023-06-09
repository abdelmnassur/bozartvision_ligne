<!DOCTYPE html>
<html lang="fr">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

    
        <!-- Fontfaces CSS-->
        <link href="{{ asset('template/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{ asset('template/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{ asset('template/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{ asset('template/css/theme.css')}}" rel="stylesheet" media="all">
        <link href="{{ asset('template/css/style.css')}}" rel="stylesheet" media="all">

    </head>
    <body class="animsition">
        <div class="page-wrapper">
            {{ $slot }} 
        </div>
        <!-- Jquery JS-->
    <script src="{{ asset('template/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('template/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('template/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('template/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('template/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('template/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('template/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('template/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('template/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('template/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('template/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('template/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('template/js/main.js')}}"></script>
    </body>
</html>