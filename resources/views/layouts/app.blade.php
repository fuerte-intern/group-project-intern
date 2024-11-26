<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @livewireStyles
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Fuerte Developers">

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- owl crousel --}}
    <link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    {{-- Exzoom prod image --}}
    <link href="{{ asset('assets/exzoom/jquery.exzoom.css')}}" rel="stylesheet">




    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    

</head>
<body>
    <div id="app">
        
        @include('layouts.inc.frontend.navbar')
        
            <main>
                @yield('content')
            </main>

        {{-- @include('layouts.inc.frontend.footer') --}}
    </div>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    
    <!-- Include Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Include Material Design Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.css" rel="stylesheet">
    

    {{-- <script>
        window.addEventListener('message', event => {
            alertify.set('notifier','position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });

    </script> --}}

    {{-- owl crousel --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    
    {{-- Exzoom prod image --}}
    <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>

    {{-- @yield('script') --}}


     @livewireScripts
     {{-- @stack('scripts') --}}
</body>
</html>
