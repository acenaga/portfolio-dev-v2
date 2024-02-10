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
    <meta name="description" content="{{ $user->about_me }}" />
    <meta name="keywords"
        content="@foreach ($user->professional_skills as $professional_skills)
        {{ $professional_skills->name }},
        @endforeach
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{ asset('assets-portfolio/images/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('assets-portfolio/images/apple-icon.png') }}">
    <link rel="shortcut icon" sizes="72x72" href="{{ asset('assets-portfolio/images/apple-icon-72x72.png') }}">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('assets-portfolio/images/apple-icon-114x114.png') }}">

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
