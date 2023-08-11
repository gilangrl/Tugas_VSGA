<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanUtamaController;
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

Route::get('/home', function () {
    return view('halamanDepan.home');
});

Route::get('/visi', function () {
    return view('halamanDepan.visiMisi');
});

Route::get('/produk', function () {
    return view('halamanDepan.produkKami');
});

Route::get('/kontak', function () {
    return view('halamanDepan.kontakKami');
});

Route::get('/about', function () {
    return view('halamanDepan.aboutUs');
});



Route::get('/', function () {
    return view('halamanDepan.index');
});

Route::get('/admin', function () {
    return view('master.index');
});



// LOGIN
Route::get('/login', [LoginController::class, 'index']);
Route::post('/masuk', [LoginController::class, 'login'])->name('masuk');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');




// ARTIKEL
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/Tambahartikel', [ArtikelController::class, 'tambah'])->name('Tambahartikel');
Route::post('/addArtikel', [ArtikelController::class, 'add'])->name('addArtikel');

Route::get('/editArtikel/{id}', [ArtikelController::class, 'edit'])->name('editArtikel');
Route::post('/updateArtikel/{id}', [ArtikelController::class, 'update'])->name('updateArtikel');

Route::get('/hapusArtikel/{id}', [ArtikelController::class, 'delete'])->name('hapusArtikel');

// EVENT
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/tambahEvent', [EventController::class, 'tambah'])->name('tambahEvent');
Route::post('/addEvent', [EventController::class, 'add'])->name('addEvent');

Route::get('/editEvent/{id}', [EventController::class, 'edit'])->name('editEvent');
Route::post('/updateEvent/{id}', [EventController::class, 'update'])->name('updateEvent');

Route::get('/hapusEvent/{id}', [EventController::class, 'delete'])->name('hapusEvent');

// GALLERY
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/tambahGallery', [GalleryController::class, 'tambah'])->name('tambahGallery');
Route::post('/addGallery', [GalleryController::class, 'add'])->name('addGallery');

Route::get('/editGallery/{id}', [GalleryController::class, 'edit'])->name('editGallery');
Route::post('/updateGallery/{id}', [GalleryController::class, 'update'])->name('updateGallery');

Route::get('/deleteGallery/{id}', [GalleryController::class, 'delete'])->name('deleteGallery');

// KLIEN
Route::get('/indexKlien', [GalleryController::class, 'indexKlien'])->name('indexKlien');
Route::get('/halamnDepanKlien', [HalamanUtamaController::class, 'halamnDepanKlien'])->name('halamnDepanKlien');



// HALAMANLANDINGPAGE
Route::get('/index', [HalamanUtamaController::class, 'index'])->name('index');
Route::get('/artikelUser', [HalamanUtamaController::class, 'artikel'])->name('artikelUser');
Route::get('/eventUser', [HalamanUtamaController::class, 'event'])->name('eventUser');
Route::get('/galleryUser', [HalamanUtamaController::class, 'gallery'])->name('galleryUser');
// Route::get('/klienUser', [GalleryController::class, 'klien'])->name('klienUser');