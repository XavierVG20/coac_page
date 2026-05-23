<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>
       Cooperativa Pujilí - @yield( 'meta_title',)
    </title>
      <meta name="description"
          content="@yield('meta_description','Cooperativa de ahorro y crédito')">

    <meta name="keywords"
          content="@yield('meta_keywords','cooperativa, creditos, ahorros')">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('img/img-fav-01.png') }}">
    <!-- Icons -->

    <link href="{{ asset('lib/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/bootstrap-icons-1.13.1//bootstrap-icons.css') }}" rel="stylesheet">


    <!-- Librerías -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Estilos -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
   <!-- Spinner Start -->


<div id="loader">
    <div class="spinner-container">
        <img src="{{ asset('img/img-fav-01.png') }}" alt="Logo" class="logo-loader">

        <div class="loading-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <p>Cargando...</p>
    </div>
</div>

<!-- Spinner End -->
     @include('partials.topbar')
    <!-- Spinner End -->
    <div class="container-fluid position-relative p-0">
 @include('partials.navbar')
</div>
    <div id="app">

        {{-- Aquí puedes agregar navbar si quieres --}}
     

        <main>
            @yield('content')
        </main>
        
      @include('partials.footbar')
 @include('partials.footer')
    </div>
   
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JS -->
     <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Librerías -->
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
<script>
    window.addEventListener('load', function () {
        document.getElementById('loader').style.display = 'none';
    });
</script>
</body>

</html>