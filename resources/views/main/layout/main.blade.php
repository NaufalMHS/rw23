@php
use App\Http\Controllers\CounterController;

CounterController::visitorCount();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title; }} | RW 23</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('main/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('main/img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('main/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- Navbar -->
    @include('main.layout.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('main.layout.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('main/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('main/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('main/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('main/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('main/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('main/js/main.js') }}"></script>

    <!-- Custom Js -->
    <script>
        @if($menu == "tentang_darken")

        function readingTime() {
            var url = window.location.pathname;

            if (url.match(/blog.*/)) {
                const text = document.getElementById("content").innerText;
                const wpm = 225;
                const words = text.trim().split(/\s+/).length;
                const time = Math.ceil(words / wpm);
                document.getElementById("time").innerText = time;
            }
        }

        readingTime();
        @endif

        new PureCounter();

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        

        var currentDropdown = null;

function toggleDropdown(menuId) {
    var dropdown = document.getElementById(menuId);

    if (currentDropdown && currentDropdown !== dropdown) {
        // Sembunyikan dropdown yang sedang terbuka
        currentDropdown.style.display = "none";
    }

    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        // Tampilkan dropdown yang dipilih
        dropdown.style.display = "block";
        currentDropdown = dropdown;
    } else {
        // Sembunyikan dropdown yang dipilih jika sudah terbuka
        dropdown.style.display = "none";
        currentDropdown = null;
    }
}


    </script>


<style>
    .popover-content {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 3 kolom */
        gap: 2px; /* Jarak antar tautan */
        max-width: max-content; /* Sesuaikan lebar maksimal sesuai kebutuhan */
        /* Opsional: Tambahkan max-height dan overflow-y jika diperlukan */
    }
    .popover-content a {
        display: block;
        text-align: center;
    }


    .services-box {
    cursor: pointer;
}

.dropdown-menu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
}

.dropdown-menu li {
    margin: 5px 0;
}

.dropdown-menu a {
    text-decoration: none;
    color: black;
}

.dropdown-menu a:hover {
    color: blue;
}

</style>
</body>

</html>