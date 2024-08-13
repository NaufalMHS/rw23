<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\MahasiswaPrestasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Index Page
Route::get('/', [MainController::class, 'index']);

//About Page
Route::get('/tentang', [MainController::class, 'about']);
//Gallery
Route::get('/galeri', [MainController::class, 'gallery']);

//Organization Page
Route::get('/organisasi', [MainController::class, 'organization']);

//Blog List
Route::get('/blog', [MainController::class, 'blog']);

//Blog List : Search Data
Route::post('/blog', [BeritaController::class, 'activity_search']);

//Blog Details
Route::get('/blog/{slug}', [MainController::class, 'blog_details']);

//Layanan Mhs
Route::get('/layanan-mahasiswa', [MainController::class, 'services']);

//ADMIN AREA

//Admin : Main Page
Route::get('/admin-area', [AdminController::class, 'index'])->middleware('auth');

//Admin : Gallery Page
Route::get('/admin-area/galeri', [AdminController::class, 'gallery'])->middleware('auth');

//Admin : Gallery Page -> Search
Route::post('/admin-area/galeri', [GaleriController::class, 'gallery_search'])->middleware('auth');

//Admin : Gallery Page -> New Data
Route::get('admin-area/galeri/new', [AdminController::class, 'gallery_new'])->middleware('auth');

//Admin : Gallery Page -> Submit
Route::post('admin-area/galeri/submit', [GaleriController::class, 'gallery_submit'])->middleware('auth');

//Admin : Gallery Page -> Edit Form
Route::get('/admin-area/galeri/edit/{id}', [GaleriController::class, 'gallery_edit'])->middleware('auth');

//Admin : Gallery Page -> Edit Data
Route::post('/admin-area/galeri/edit/update', [GaleriController::class, 'gallery_update'])->middleware('auth');

//Admin : Gallery Page -> Delete Data
Route::get('/admin-area/galeri/delete/{id}', [GaleriController::class, 'gallery_delete'])->middleware('auth');

//Admin : Category Page
Route::get('/admin-area/kategori-galeri', [AdminController::class, 'gallery_category'])->middleware('auth');

//Admin : Category Page -> Search
Route::post('/admin-area/kategori-galeri', [GaleriController::class, 'gallery_category_search'])->middleware('auth');

//Admin : Category Page -> New Data
Route::get('/admin-area/kategori-galeri/new', [AdminController::class, 'gallery_category_new'])->middleware('auth');

//Admin : Category Page -> Submit
Route::post('/admin-area/kategori-galeri/submit', [GaleriController::class, 'gallery_category_submit'])->middleware('auth');

//Admin : Category Page -> Details Page
Route::get('/admin-area/kategori-galeri/detail/{id}', [GaleriController::class, 'gallery_category_details'])->middleware('auth');

//Admin : Category Page -> Edit Page
Route::get('/admin-area/kategori-galeri/edit/{id}', [GaleriController::class, 'gallery_category_edit'])->middleware('auth');

//Admin : Category Page -> Edit Data
Route::post('/admin-area/kategori-galeri/edit/update', [GaleriController::class, 'gallery_category_update'])->middleware('auth');

//Admin : Category Page -> Delete Data
Route::get('/admin-area/kategori-galeri/delete/{id}', [GaleriController::class, 'gallery_category_delete'])->middleware('auth');

//Admin : Organization
Route::get('/admin-area/struktur-organisasi', [AdminController::class, 'organization'])->middleware('auth');

//Admin : Organization -> New Data
Route::get('/admin-area/struktur-organisasi/new', [AdminController::class, 'organization_new'])->middleware('auth');

//Admin : Organization -> Submit
Route::post('/admin-area/struktur-organisasi/submit', [OrganisasiController::class, 'organization_submit'])->middleware('auth');

//Admin : Oranization -> Edit Page
Route::get('/admin-area/struktur-organisasi/edit/{id}', [OrganisasiController::class, 'organization_edit'])->middleware('auth');

//Admin : Oranization -> Edit Data
Route::post('/admin-area/struktur-organisasi/edit/update', [OrganisasiController::class, 'organization_update'])->middleware('auth');

//Admin : Oranization -> Delete Data
Route::get('/admin-area/struktur-organisasi/delete/{id}', [OrganisasiController::class, 'organization_delete'])->middleware('auth');

//Admin : Information
Route::get('/admin-area/informasi-umum', [AdminController::class, 'about'])->middleware('auth');

//Admin : Information -> Edit Pictures
Route::post('/admin-area/informasi-umum/edit-foto', [TentangController::class, 'photo_edit'])->middleware('auth');

//Admin : Information -> Edit Informasi
Route::post('/admin-area/informasi-umum/edit-deskripsi', [TentangController::class, 'informasi_edit'])->middleware('auth');

//Admin : Information -> Edit Visi
Route::post('/admin-area/informasi-umum/edit-visi', [TentangController::class, 'visi_edit'])->middleware('auth');

//Admin : Information -> Edit Misi
Route::post('/admin-area/informasi-umum/edit-misi', [TentangController::class, 'misi_edit'])->middleware('auth');

//Admin : Information -> Edit Tujuan
Route::post('/admin-area/informasi-umum/edit-tujuan', [TentangController::class, 'tujuan_edit'])->middleware('auth');

//Admin : Information -> Edit Sasaran
Route::post('/admin-area/informasi-umum/edit-sasaran', [TentangController::class, 'sasaran_edit'])->middleware('auth');

//Admin : Information -> Edit Sasaran
Route::post('/admin-area/informasi-umum/edit-strategi', [TentangController::class, 'strategi_edit'])->middleware('auth');

//Admin : Account
Route::get('/admin-area/akun', [AdminController::class, 'account'])->middleware('auth');

//Admin : Account -> Search
Route::post('/admin-area/akun', [AkunController::class, 'account_search'])->middleware('auth');

//Admin : Account -> Details
Route::get('/admin-area/akun/detail', [AkunController::class, 'account_detail'])->middleware('auth');

//Admin : Account -> New Data
Route::get('/admin-area/akun/new', [AdminController::class, 'account_new'])->middleware('auth');

//Admin : Account -> Submit
Route::post('/admin-area/akun/submit', [AkunController::class, 'account_submit'])->middleware('auth');

//Admin : Account -> Edit Page
Route::get('/admin-area/akun/edit/{id}/{from}', [AkunController::class, 'account_edit'])->middleware('auth');

//Admin : Account -> Edit Data
Route::post('/admin-area/akun/edit/update', [AkunController::class, 'account_update'])->middleware('auth');

//Admin : Account -> Delete Data
Route::get('/admin-area/akun/delete/{id}/{from}', [AkunController::class, 'account_delete'])->middleware('auth');

//Admin : Login Page
Route::get('/login', [AdminController::class, 'login'])->name('login')->middleware('guest');

//Admin : Verify Login
Route::post('/login', [AkunController::class, 'login'])->middleware('guest');

//Admin : Logout
Route::get('/logout', [AkunController::class, 'logout'])->middleware('auth');

//Admin : Activity
Route::get('/admin-area/agenda-kegiatan', [AdminController::class, 'activity'])->middleware('auth');

//Admin : Activity -> Search
Route::post('/admin-area/agenda-kegiatan', [BeritaController::class, 'activity_search'])->middleware('auth');

//Admin : Activity -> New Data
Route::get('/admin-area/agenda-kegiatan/new', [AdminController::class, 'activity_new'])->middleware('auth');

//Admin : Activity -> Submit
Route::post('/admin-area/agenda-kegiatan/submit', [BeritaController::class, 'activity_submit'])->middleware('auth');

//Admin : Activity -> Edit Form
Route::get('/admin-area/agenda-kegiatan/edit/{id}', [BeritaController::class, 'activity_edit'])->middleware('auth');

//Admin : Activity -> Edit Data
Route::post('/admin-area/agenda-kegiatan/edit/update', [BeritaController::class, 'activity_update'])->middleware('auth');

//Admin : Activity -> Delete Data
Route::get('/admin-area/agenda-kegiatan/delete/{id}', [BeritaController::class, 'activity_delete'])->middleware('auth');
