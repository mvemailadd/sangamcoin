<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/img/sangamcoins_fav.png">
    <title>Sangam Coins | Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" type="text/css">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    @include('header')

    <main id="main">

        @yield('content')

    </main>

    @include('footer')

    <!-- Scroll Top Button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
