@extends('main.layout.main')

@section('content')
<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding-top: 150px;">
        <div class="container" data-aos="zoom-in">
          <div class="section-title">
            <h2>Struktur</h2>
            <p>Organisasi</p>
          </div>
        </div>
      </section><!-- End Cta Section -->
    <div class="organization" id="organization">
        <div class="container organization-custom-margin justify-content-center" data-aos="zoom-in">
            <div class="row">
              @foreach ($organization as $data)
              <div class="col-12">
                <img src="{{ asset('img/organization/'.$data -> data_struktur) }}" class="img-fluid" alt="">
              </div>
              @endforeach
            </div>
        </div>
    </div>
</main>
@endsection