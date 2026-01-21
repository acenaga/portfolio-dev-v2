<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <!-- our project is using icons from Solid, Sharp Thin, Sharp Duotone Thin + Brands -->
    <link href="{{ asset('assets-portfolio/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-portfolio/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-portfolio/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-portfolio/fontawesome/css/sharp-thin.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-portfolio/fontawesome/css/sharp-duotone-thin.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css"
        integrity="sha512-cyzxRvewl+FOKTtpBzYjW6x6IAYUCZy3sGP40hn+DQkqeluGRCax7qztK2ImL64SA+C7kVWdLI6wvdlStawhyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">


    <!-- Scripts -->
    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body class="font-sans antialiased bg-light">
    <x-banner />
    @livewire('navigation-menu')

    <!-- Page Heading -->
    <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main class="container my-5">
        {{ $slot }}
    </main>

    @stack('modals')


    @stack('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <script>
        function initializeAutocomplete() {
            var input = document.getElementById('address');
            var autocomplete = new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initializeAutocomplete);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"
        integrity="sha512-6lplKUSl86rUVprDIjiW8DuOniNX8UDoRATqZSds/7t6zCQZfaCe3e5zcGaQwxa8Kpn5RTM9Fvl3X2lLV4grPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/image.js') }} "></script>
    <script>
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            height: 600,
        });
    </script>
</body>

</html>
