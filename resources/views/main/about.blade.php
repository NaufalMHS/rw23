@extends('main.layout.main')

@section('content')
<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding-top: 150px;">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2>Informasi</h2>
          <p>Umum</p>
        </div>
      </div>
    </section><!-- End Cta Section -->

    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('main/img/'.$about[0] -> foto_sampul) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <div class="section-title" style="margin-bottom: -30px; ">
             <p>RW 23</p><h2></h2>
            </div>
            {!! html_entity_decode($about[0] -> informasi_umum) !!}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="visi-misi" class="visi-misi">
      <div class="container" data-aos="fade-up">
        <div class="section-title-right" style="margin-bottom: -30px; ">
          <h2><i class=""></i>Visi Misi</h2>
          <p>Visi & Misi</p>
        </div>
        <div class="row">
          <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100">
            <h2><i class="ri-eye-line"></i> Visi</h2>
            {!! html_entity_decode($about[0] -> visi) !!}
          </div>
          <div class="col-lg-6 content" data-aos="fade-left" data-aos-delay="100">
            <h2><i class="ri-rocket-2-line"></i>Misi</h2>
            {!! html_entity_decode($about[0] -> misi) !!}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="visi-misi" class="visi-misi">
      <div class="container" data-aos="fade-up">
        <div class="section-title" style="margin-bottom: -30px; ">
          <h2><i class=""></i>Tujuan &</h2>
          <p>Sasaran</p>
        </div>
        <div class="row">
          <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100">
            <h2><i class="ri-map-pin-3-line"></i> Tujuan</h2>
            {!! html_entity_decode($about[0] -> tujuan) !!}
          </div>
          <div class="col-lg-6 content" data-aos="fade-left" data-aos-delay="100">
            <h2><i class="ri-focus-2-line"></i>Sasaran</h2>
            {!! html_entity_decode($about[0] -> sasaran) !!}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
      </div>
    </section><!-- End Clients Section -->
    
  </main><!-- End #main -->
@endsection