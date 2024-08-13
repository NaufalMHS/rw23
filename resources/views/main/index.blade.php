@extends('main.layout.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>RW 23 <br><span>CINUNUK </span></h1>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-file-info-line"></i>
                    <h3><a href="#about">Tentang</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-article-line"></i>
                    <h3><a href="#events">Kegiatan</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-contacts-book-2-line"></i>
                    <h3><a href="#contact">Kontak</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('../main/img/'.$about[0] -> foto_sampul) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                    data-aos-delay="100">
                    <div class="section-title" style="margin-bottom: -30px; ">
                        <h2>Profile</h2>
                        <p>RW 23</p>
                    </div>
                    {!! html_entity_decode($about[0] -> informasi_umum) !!}
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Jumlah</h2>
                <p>Warga RW 23</p>
            </div>

            <div class="text-center">

                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <span id="number-custom" data-purecounter-start="0" data-purecounter-end="500"
                                data-purecounter-duration="3" class="purecounter"></span>
                            <span id="number-custom">+ </span>
                            <p>Jumlah KK</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <span id="number-custom" data-purecounter-start="0" data-purecounter-end="5000"
                                data-purecounter-duration="3" class="purecounter"></span>
                            <span id="number-custom">+ </span>
                            <p>wanita</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <span id="number-custom" data-purecounter-start="0"
                                data-purecounter-end="3" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Pria</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <span id="number-custom" data-purecounter-start="0" data-purecounter-end="3"
                                data-purecounter-duration="3" class="purecounter"></span>
                            <p>Jumlah Warga</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Section ======= -->
    <section id="events" class="events" >
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Highlight</h2>
                <p>Berita</p>
            </div>
            @if (count($activity) == 0)
                <div class="text-center">
                    <p>Belum ada berita.</p>
                </div>
            @else 
            <div class="row">
                @foreach ($activity as $data)
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex align-items-stretch">
                    <a href="{{'/blog/'.$data -> url_slug}}">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('img/information/'.$data -> sampul) }}"
                                    class="img-fluid mx-auto d-block" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $data -> judul }}</h4>
                                <div class="align-middle">
                                    <i class="ri-calendar-event-line"></i>
                                    <p>{{ $data -> tgl_kirim }}</p>
                                </div>
                                <hr>
                                <span class="limit-chars">{{ strip_tags($data -> isi) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            <div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-outline-warning" href="/blog">Berita Lainnya</a>
            </div>
            @endif
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Testimoni dari</h2>
                <p class="text-white">Alumni</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('main/img/testimonials/Wulandari.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Wulandari</h3>
                            <h4>Teknik Informatika '2006 - PT. TELKOM Indonesia</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Ibarat berperang, masa kuliah merupakan moment dimana kita mempersiapkan diri menyiapkan senjata dan kebutuhan lain agar bisa menang dalam peperangan, dan saya merasakan mendapatkan bekal persiapan perang yang cukup saat berkuliah di ITENAS.
                                Sukses selalu ITENAS, terima kasih telah memberikan banyak pelajaran dan perbekalan perang berharga yang mampu membuat saya berhasil mencapai cita-cita yang saya impikan. 
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>End testimonial item -->
<!--                     
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
     -->
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="testimonials" class="testimonials" style=" color: white;">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style=" color: white;">
                <h2 style=" color: white;">Tentang</h2>
                <p style=" color: white;">Kontak</p> 
            </div>

            <div class="row">
                <div class="col-md-8 mb-5">
                    <div>
                        <iframe style="border:0; width: 100%; height: 300px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d833.6746287102675!2d107.72989194267812!3d-6.943122908958145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1709029612373!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    </div>
                <div class="col-md-4 mb-5">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi :</h4>
                                    <p>Komplek Permata Biru RW 23 Desa Cinunuk Kecamatan Cileunyi, Kabupaten Bandung </p>
                                </div>
<!--         
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email :</h4>
                                    <p><a href="mailto:informatics.itenas@gmail.com" target="_blank">informatics.itenas@gmail.com</a></p>
                                    <p><a href="mailto:teknikinformatikaitenas1@gmail.com">teknikinformatikaitenas1@gmail.com</a></p>
                                </div>
        
                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Telepon :</h4>
                                    <p><a href="tel:+62 22 7272 215">+62 22 7272 215</a></p> -->
                                </div>
                            </div>
                        </div>    

                    </div>
                </div>
            </div>

            

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection