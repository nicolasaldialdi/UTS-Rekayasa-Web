<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

// 1. Halaman Beranda (Home)
Route::get('/', [SportController::class, 'home'])->name('sports.home');

// 2. Halaman Katalog Olahraga & Kegiatan
Route::get('/sports', [SportController::class, 'index'])->name('sports.index');

// 3. Sub-page: Halaman Detail Olahraga & Kegiatan
Route::get('/sport/{id}', [SportController::class, 'show'])->name('sports.show');

// 4. Halaman Tentang / Profil Pembuat (UTS)
Route::get('/about', [SportController::class, 'about'])->name('sports.about');