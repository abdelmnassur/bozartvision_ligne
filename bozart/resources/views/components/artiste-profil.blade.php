<!doctype html>
<html lang="fr">

    <head>
        <title>Bozartvision</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="meta description">

        <link href="{{ asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">

        <link href="{{ asset('template1/css/artiste_profil.css') }}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{ asset('template/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('template/vendor/bootstrap-4.1/bootstrap.css') }}" rel="stylesheet" media="all">

        
    </head>

    <body>
        {{ $slot }}
    </body>
</html>