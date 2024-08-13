<!-- ======= Header ======= -->
<header id="header" class="fixed-top @if (($menu == "tentang_darken") || ($menu == 'akademik_darken')) header-inner-pages @endif">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <!--<h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="./assets/favicon.png" alt=""><span>.</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto me-lg-0"><img src="{{ asset('main/img/logo-icon.ico') }}" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto @if ($menu == "beranda") active @endif" href="/">Beranda</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="@if (($menu == "tentang") || ($menu=="tentang_darken" )) active
                        @endif"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/tentang">Informasi Umum</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/organisasi">Struktur Organisasi</a></li>
                        <li><a href="/blog">Berita</a></li>
                    </ul>
                </li>
                
                <li><a class="nav-link scrollto @if ($menu == "layanan mhs") active @endif"
                        href="/layanan-mahasiswa">Layanan Mahasiwa</a></li>
            
            <a class="nav-link scrollto"
                        href="/login">Login</a>
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->