@extends('main.layout.main')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li>{{ $blog[0] -> judul }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $blog[0] -> judul }}</h1>
                </div>
                <div class="col-12 mb-4">
                    <pre>Diunggah pada {{ $blog[0] -> tgl_kirim }}@if ($blog[0]-> tgl_kirim != $blog[0] -> tgl_update), diperbarui pada {{ $blog[0] -> tgl_update }} @endif| Waktu baca selama <span id="time"></span> menit.</pre>
                </div>
                <div class="col-12" id="content">
                    <img class="rounded mx-auto d-block" src="{{ asset('img/information/'.$blog[0] -> sampul) }}" style="max-width: 70%; max-height: 40%">
                    <br>
                    {!! html_entity_decode($blog[0] -> isi) !!}
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection