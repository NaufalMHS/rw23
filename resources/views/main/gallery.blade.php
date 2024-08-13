@extends('main.layout.main')

@section('content')
<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding-top: 150px;">
        <div class="container" data-aos="zoom-in">
          <div class="section-title">
            <h2>Galeri</h2>
            <p>Warga</p>
          </div>
        </div>
      </section><!-- End Cta Section -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($category as $data)
                <li data-filter=".{{ $data -> id_kategori }}">{{ $data -> nama_kategori }}</li>
                @endforeach                
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($gallery as $data)
            <div class="col-lg-4 col-md-6 portfolio-item {{ $data -> id_kategori }}">
                <div class="portfolio-wrap">
                    <img src="{{ asset('img/gallery/'.$data -> images) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4>{{ $data -> judul }}</h4>
                    {!! html_entity_decode($data -> deskripsi) !!}
                    <div class="portfolio-links">
                        <a href="{{ asset('img/gallery/'.$data -> images) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $data -> judul }}"><i class="bx bx-fullscreen"></i></a>
                        <a href="{{ asset('img/gallery/'.$data -> images) }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
        {{ $gallery -> links() }}
        </div>
    </section><!-- End Portfolio Section -->
</main>
@endsection