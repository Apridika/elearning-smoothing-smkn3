<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// ==========================================
// MODUL 1: MATERI (Artikel/Modul Tekstual)
// ==========================================
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');

// ==========================================
// MODUL 2: VIDEO PEMBELAJARAN
// ==========================================
// Menggunakan VideoController (Sesuai perbaikan workflow kemarin)
Route::get('/video-pembelajaran', [VideoController::class, 'index'])->name('video.index');
Route::get('/video-pembelajaran/{id}', [VideoController::class, 'show'])->name('video.show');

// ==========================================
// MODUL 3 & 4: RUANG KELAS & KARYA SISWA
// ==========================================
Route::get('/ruang-kelas', function () {
    return view('kelas.index');
})->name('kelas.index');

Route::get('/karya-siswa', function () {
    return view('karya.index');
})->name('karya.index');