<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $user->name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if ($user->about_me)
        <meta name="description" content="{{ $user->about_me }}" />
    @endif
    @if ($user->about_me_picture)
        <meta name="image" content="{{ $user->about_me_picture }}" />
        <meta property="og:image" content="{{ $user->about_me_picture }}" />
    @endif
    @if ($user->about_me)
        <meta property="og:description" content="{{ $user->about_me }}" />
    @endif
    @if ($user->professional_skills)
    <meta name="keywords"
        content="@foreach ($user->professional_skills as $professional_skills)
        {{ $professional_skills->name }},
        @endforeach
        " />
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}>
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
    {{-- <meta name="msapplication-TileColor" content="#ffffff"> --}}
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}">
    {{-- <meta name="theme-color" content="#ffffff"> --}}

    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome local -->
    {{-- <link rel="stylesheet" href=" {{ asset('assets-portfolio/icons/font-awesome-4.7.0/css/font-awesome.min.css') }} "> --}}
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/8bf5f09e87.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/plugins/css/bootstrap.min.css') }}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/plugins/css/animate.css') }}">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/plugins/css/owl.css') }} ">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/plugins/css/jquery.fancybox.min.css') }} ">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{ asset('assets-portfolio/css/styles.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets-portfolio/css/responsive.css') }} ">

    <!-- Colors -->
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/blue.css') }} " title="blue">
    <link rel="stylesheet" href="{{ asset('assets-portfolio/css/colors/defauld.css') }} " title="defauld">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/green.css') }} " title="green">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/blue-munsell.css') }} "
        title="blue-munsell">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/orange.css') }} " title="orange">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/purple.css') }} " title="purple">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/slate.css') }} " title="slate">
    <link rel="alternate stylesheet" href="{{ asset('assets-portfolio/css/colors/yellow.css') }} " title="yellow">
</head>

<body class="dark-vertion black-bg">

    <!-- Start Loader -->
    <div class="section-loader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loader -->
