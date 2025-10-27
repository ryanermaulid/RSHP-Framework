<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\{
    JenisHewanController,
    RasHewanController,
    KategoriController,
    KategoriKlinisController,
    KodeTindakanTerapiController,
    PetController,
    RoleController,
    UserController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/struktur-organisasi', [SiteController::class, 'strukturOrganisasi'])->name('struktur');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('layanan');
Route::get('/visi-misi', [SiteController::class, 'visiMisi'])->name('visi-misi');
Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('cek-koneksi');
Route::get('/jadwal-dokter', [SiteController::class, 'jadwalDokter'])->name('jadwal-dokter');

// Data dari Database
Route::get('/jenis-hewan', [JenisHewanController::class, 'index'])->name('jenis-hewan');
Route::get('/ras-hewan', [RasHewanController::class, 'index'])->name('ras-hewan');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori-klinis', [KategoriKlinisController::class, 'index'])->name('kategori-klinis');
Route::get('/kode-tindakan-terapi', [KodeTindakanTerapiController::class, 'index'])->name('kode-tindakan-terapi');
Route::get('/pet', [PetController::class, 'index'])->name('pet');
Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::get('/user', [UserController::class, 'index'])->name('user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
