<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

// 1. PINTU MASUK UTAMA: Wajib ke halaman Login dulu
Route::get('/', function () {
    return redirect('/login');
});

// 2. LOGIKA PEMBEDA SETELAH LOGIN (Breeze)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin/home'); // Admin langsung dilempar ke Home Admin
        }
        return redirect('/home'); // User biasa langsung ke Home web utama
    })->name('dashboard');

    // ==========================================
    // 👤 KELOMPOK HALAMAN USER BIASA
    // ==========================================
    Route::get('/home', function () { 
        return view('home'); // File: resources/views/home.blade.php
    })->name('home');

    Route::get('/about', function () { 
        return view('about'); // File: resources/views/about.blade.php
    });

    Route::get('/contact', function () { 
        return view('contact'); // File: resources/views/contact.blade.php
    })->name('contact');

    // RUTE PENYELAMAT: Biar form contact.blade.php gak eror saat di-render
    Route::post('/contact', function () {
        // Nanti di sini tempat codingan buat nyimpen pesan contact ke database kelompokmu
        return back()->with('success', 'Pesan berhasil dikirim!');
    })->name('contact.store');


    // ==========================================
    // 👑 KELOMPOK HALAMAN KHUSUS ADMIN
    // ==========================================
    Route::prefix('admin')->group(function () {

        // Home versi Admin
        Route::get('/home', function () {
            if (auth()->user()->role !== 'admin') { return redirect('/home'); }
            
            return "<h1>👑 HALAMAN HOME ADMIN</h1><p>Halo Admin, di sini kamu bisa mengedit isi materi halaman Home.</p><a href='/home'>Lihat Web User</a>";
        });

        // About versi Admin
        Route::get('/about', function () {
            if (auth()->user()->role !== 'admin') { return redirect('/home'); }

            return "<h1>👑 HALAMAN ABOUT ADMIN</h1><p>Di sini tempat admin mengedit profil kelompok / tentang aplikasi.</p>";
        });

// Contact Admin: Memanggil file view yang ada di folder admin/contact
        Route::get('/contact', function () {
            if (auth()->user()->role !== 'admin') { return redirect('/home'); }

            // Ambil data dari Navicat
            $semua_pesan = Contact::latest()->get(); 

            // Mengarahkan ke file resources/views/admin/contact.blade.php sambil membawa datanya
            return view('admin.contact', compact('semua_pesan'));
        });

    });
});

// Bawaan Breeze (Jangan dihapus)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';