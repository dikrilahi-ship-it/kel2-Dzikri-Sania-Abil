<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Http\Controllers\ContactController;

Route::get('/', function () { return redirect('/login'); });

Route::middleware(['auth'])->group(function () {
    
    // --- CRUD E-BOOK ---
    Route::get('/ebooks', function () {
        $books = DB::table('ebooks')->get(); 
        return view('ebooks', compact('books'));
    })->name('books.index');

    Route::post('/ebooks/store', function (\Illuminate\Http\Request $request) {
        if (auth()->user()->role !== 'admin') { return redirect('/ebooks'); }
        $data = ['judul' => $request->judul, 'penulis' => $request->penulis];
        
        if ($request->hasFile('image')) {
            $nama_gambar = time() . '_cover.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $nama_gambar);
            $data['image'] = '/uploads/' . $nama_gambar;
        }
        if ($request->hasFile('ebook_file')) {
            $nama_pdf = time() . '_ebook.' . $request->file('ebook_file')->getClientOriginalExtension();
            $request->file('ebook_file')->move(public_path('books'), $nama_pdf);
            $data['file_pdf'] = '/books/' . $nama_pdf;
        }
        DB::table('ebooks')->insert($data);
        return redirect('/ebooks');
    });

    Route::post('/ebooks/{id}/update', function (\Illuminate\Http\Request $request, $id) {
        if (auth()->user()->role !== 'admin') { return redirect('/ebooks'); }
        $data_update = ['judul' => $request->judul, 'penulis' => $request->penulis];
        
        if ($request->hasFile('image')) {
            $nama_gambar = time() . '_cover.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads'), $nama_gambar);
            $data_update['image'] = '/uploads/' . $nama_gambar;
        }
        if ($request->hasFile('ebook_file')) {
            $nama_pdf = time() . '_ebook.' . $request->file('ebook_file')->getClientOriginalExtension();
            $request->file('ebook_file')->move(public_path('books'), $nama_pdf);
            $data_update['file_pdf'] = '/books/' . $nama_pdf;
        }
        DB::table('ebooks')->where('id', $id)->update($data_update);
        return redirect('/ebooks');
    });

    Route::post('/ebooks/{id}/delete', function ($id) {
        if (auth()->user()->role !== 'admin') { return redirect('/ebooks'); }
        DB::table('ebooks')->where('id', $id)->delete();
        return redirect('/ebooks');
    });

    // --- RUTE HALAMAN LAIN (AGAR TIDAK 404) ---
    Route::get('/home', function () { return view('home'); })->name('home');
    Route::get('/about', function () { return view('about'); })->name('about');
    Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store'); // <-- tambah di sini

// Ubah rute dashboard jadi gini:
    Route::get('/dashboard', function () {
        return redirect('/home'); // Admin dan User sama-sama ke /home
    })->name('dashboard');

// --- UBAH BAGIAN INI ---
    Route::prefix('admin')->group(function () {
        // Admin sekarang dilempar ke /home, sama kayak User
        Route::get('/home', function () { return redirect('/home'); });
        
        // Halaman Contact Admin tetep aman di sini
        Route::get('/contact', function () { 
            return view('admin.contact', ['semua_pesan' => Contact::latest()->get()]); 
        });
    });
});

require __DIR__.'/auth.php';