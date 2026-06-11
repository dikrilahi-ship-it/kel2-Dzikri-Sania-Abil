<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // <-- Kita panggil Controller-nya di sini

Route::redirect('/', '/home');

Route::get('/home', function () {
    return view('home');
});

// 1. Jalur untuk MENAMPILKAN halaman contact (sekarang lewat Controller)
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// 2. Jalur untuk MENERIMA DATA dari form contact dan menyimpannya ke Navicat
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', function () {
    return view('about');
});