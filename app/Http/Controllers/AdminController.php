<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Tentang;
use App\Models\Galeri;
use App\Models\Kurikulum;
use App\Models\Organisasi;
use App\Models\User;
use App\Models\Counter;
use App\Models\MahasiswaPrestasi;

class AdminController extends Controller
{
    public function index() {
        $countactivity = Berita::count();
        $countinformation = Tentang::count();
        // $countlecturer = Dosen::count();
        $countcategory = Galeri::kategori()->count();
        $countgallery = Galeri::vgaleri()->count();
        $countorganization = Organisasi::count();
        // $countcurriculum = Kurikulum::count();
        $countuser = User::count();
        $countervisits = Counter::getCounterData();

        return view('admin.index', [
            'title' => "Beranda",
            'menu' => "home",
            'activity_count' => $countactivity,
            'information_count' => $countinformation,
            // 'lecturer_count' => $countlecturer,
            'category_count' => $countcategory,
            'gallery_count' => $countgallery,
            'organization_count' => $countorganization,
            // 'curriculum_count' => $countcurriculum,
            'user_count' => $countuser,
            'countervisit' => $countervisits,
        ]);
    }
    
    //Lecturer Page


    //Gallery Controller 

    public function gallery() {
        $gallery = Galeri::vgaleri()->paginate(8);

        return view('admin.gallery', [
            'title' => "Galeri",
            'menu' => "galeri",
            'gallery' => $gallery,
        ]);
    }

    public function gallery_new() {
        $category = Galeri::kategori()->get();

        return view('admin.gallery_new', [
            'category' => $category,
            'menu' => "galeri",
            'title' => "Upload Foto Baru",
        ]);
    }

    //Category Controller 

    public function gallery_category() {
        $category = Galeri::kategori()->paginate(20);

        return view('admin.gallery_category', [
            'category' => $category,
            'menu' => "kategori",
            'title' => "Kategori Foto"
        ]);
    }

    public function gallery_category_new() {

        return view('admin.gallery_category_new', [
            'menu' => "kategori",
            'title' => "Kategori Foto Baru"
        ]);
    }

    //Organization Controller

    public function organization() {
        $organization = Organisasi::get();

        return view('admin.organization', [
            'title' => "Struktur Organisasi",
            'menu' => "organisasi",
            'organization' => $organization,
        ]);
    }

    public function organization_new() {
        return view('admin.organization_new', [
            'menu' => "organisasi",
            'title' => "Data Organisasi Baru"
        ]);
    }

    //Activity Controller 

    public function activity() {
        $activity = Berita::paginate(8);

        return view('admin.activity', [
            'menu' => "kegiatan",
            'title' => 'Data Berita',
            'activity' => $activity,
        ]);
    }

    public function activity_new() {

        return view('admin.activity_new', [
            'menu' => "kegiatan",
            'title' => 'Berita Baru'
        ]);
    }

    public function about() {
        $about = Tentang::get();

        return view('admin.about', [
            'menu' => "informasi",
            'title' => 'Data Informasi Umum',
            'about' => $about,
        ]);
    }

    public function account() {
        $account = User::paginate(20);

        return view('admin.account', [
            'menu' => "pengguna",
            'title' => 'Data Pengguna',
            'account' => $account
        ]);
    }

    public function account_new() {
        return view('admin.account_new', [
            'menu' => "pengguna",
            'title' => 'Data Pengguna Baru'
        ]);
    }

    public function login() {
        return view('admin.login', [
            'title' => 'Login Page'
        ]);
    }
}
