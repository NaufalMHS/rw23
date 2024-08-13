@extends('main.layout.main')

@section('content')
<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding-top: 150px;">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Arsip</h2>
                <p>Berita</p>
            </div>
        </div>
    </section><!-- End Cta Section -->

    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="d-flex flex-row-reverse">
                <div class="row mb-4">
                    <div class="col-auto">
                        <label for="judul" class="col-form-label">Cari Berita</label>
                      </div>
                      <div class="col-auto">
                        <form action="/blog" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input required type="text" id="judul" class="form-control" name="judul" placeholder="Cari judul berita...">
                            <button class="btn btn-outline-warning" type="submit">Cari</button>
                        </div>
                        @error('judul')
                        <div class="form-text">
                            <i class="ri-error-warning-line"></i>
                            Masukkan keyword pencarian yang valid.
                        </div>
                        @enderror
                        </form>
                      </div>
                </div>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <i class="ri-close-circle-line"></i>
                <div class="pl-3">
                  {{ Session::get('message') }}
                </div>
              </div>
            @else
            <div class="row">
                @foreach ($blog as $data)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <a href="{{'/blog/'.$data -> url_slug}}">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('img/information/'.$data -> sampul) }}"
                                    class="img-fluid mx-auto d-block" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $data -> judul }}</h4>
                                <i class="ri-calendar-event-line"></i>
                                <p>{{ $data -> tgl_kirim }}</p>
                                <hr>
                                <span class="limit-chars">{{ strip_tags($data -> isi) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            {{ $blog->links('main.layout.pagination') }}
            @endif
        </div>
    </section>
</main>
@endsection