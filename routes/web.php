<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Fasilitas\DataAlatController;
use App\Http\Controllers\Fasilitas\DataRuanganController;
use App\Http\Controllers\DataPengguna\DataPetugasController;
use App\Http\Controllers\DataPengguna\DataLembagaController;
use App\Http\Controllers\DataPeminjamanController;
use App\Http\Controllers\HistoriKonflikController;
use App\Http\Controllers\HistoriPeminjamanController;
use App\Http\Controllers\KonflikPeminjamanController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PendaftarBaruController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PermintaanPeminjamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.auth.login.index');
});
Route::get("/dashboard", [DashboardController::class,'indexPage']);
Route::get("/about", [AboutController::class,'indexPage']);
Route::resource('/data-petugas', DataPetugasController::class);
Route::resource('/data-lembaga', DataLembagaController::class);
Route::resource('/data-alat', DataAlatController::class);
Route::resource('/data-ruangan', DataRuanganController::class);
Route::resource('/data-peminjaman', DataPeminjamanController::class);
Route::resource('/histori-konflik', HistoriKonflikController::class);
Route::resource('/histori-peminjaman', HistoriPeminjamanController::class);
Route::resource('/konflik-peminjaman', KonflikPeminjamanController::class);
Route::resource('/kriteria', KriteriaController::class);
Route::resource('/laporan', LaporanController::class);
Route::resource('/pendaftar-baru', PendaftarBaruController::class);
Route::resource('/pengaturan', PengaturanController::class);
Route::resource('/permintaan-peminjaman', PermintaanPeminjamanController::class);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
