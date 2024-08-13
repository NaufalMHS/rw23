<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Tentang;
use App\Models\Galeri;
use App\Models\Kurikulum;
use App\Models\MahasiswaPrestasi;
use App\Models\Organisasi;

class MainController extends Controller
{
    public function index() {
        $activity = Berita::orderBy('tgl_kirim', 'DESC')->limit(8)->get();
        $about = Tentang::get();

        return view('main.index', [
            'title' => "Beranda",
            'menu' => 'beranda',
            'activity' => $activity,
            'about' => $about,
        ]);
    }

    public function about() {
        $about = Tentang::get();

        return view('main.about', [
            'title' => "Tentang",
            'menu' => 'tentang',
            'about' => $about
        ]);
    }

    public function gallery() {
        $gallery = Galeri::vgaleri()->paginate(12);
        $category = Galeri::kategori()->get();

        return view('main.gallery', [
            'title' => "Galeri",
            'menu' => 'tentang',
            'category' => $category,
            'gallery' => $gallery
        ]);
    }

    public function organization() {
        $organization = Organisasi::get();

        return view('main.organization', [
            'title' => "Struktur Organisasi",
            'menu' => 'tentang',
            'organization' => $organization,
        ]);
    }

   
    public function blog() {
        $blog = Berita::paginate(8);

        return view('main.blog', [
            'title' => 'Blog',
            'menu' => 'tentang',
            'blog' => $blog
        ]);
    }

    public function blog_details($slug) {
        $blog = Berita::where('url_slug', $slug)->get();

        return view('main.blog_details', [
            'title' => $blog[0] -> judul.' | Berita',
            'menu' => 'tentang_darken',
            'blog' => $blog
        ]);
    }

    public function services() {
        return view('main.services', [
            'title' => "Layanan warga",
            'menu' => 'layanan mhs'
        ]);
    }


}
