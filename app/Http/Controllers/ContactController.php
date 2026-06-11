<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // <-- Ini penting untuk memanggil si Asisten Model kita

class ContactController extends Controller
{
    // Fungsi untuk menampilkan halaman form contact
    public function index()
    {
        return view('contact');
    }

    // Fungsi untuk memproses dan menyimpan data form ke Navicat
    public function store(Request $request)
    {
        // 1. Validasi data agar form wajib diisi
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // 2. Simpan data ke database Navicat
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // 3. Kembali ke halaman contact dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan kamu berhasil dikirim ke database!');
    }
}