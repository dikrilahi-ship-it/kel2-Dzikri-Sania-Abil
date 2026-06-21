<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // <-- Ini penting untuk memanggil si Asisten Model kita

class ContactController extends Controller
{
// 1. READ: Menampilkan semua data kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Menampilkan halaman form tambah kontak
    public function create()
    {
        return view('contacts.create');
    }

    // 2. CREATE: Memproses dan menyimpan data dari form ke database
    public function store(Request $request)
    {
        // Validasi data agar form wajib diisi sesuai kolom baru
       $request->validate([
    'nama' => 'required', // Ganti 'name' menjadi 'nama' agar sesuai dengan form
    'nomor_telepon' => 'required',
    'biodata' => 'nullable',
        ]);

        // Simpan data ke database
        // Simpan data ke database
Contact::create([
    'name_kontak' => $request->nama,          // Memasukkan input 'nama' ke kolom 'name_kontak'
    'email'       => $request->nomor_telepon, // Memasukkan input 'nomor_telepon' ke kolom 'email'
    'message'     => $request->biodata,       // Memasukkan input 'biodata' ke kolom 'message'
]);

        // Kembali ke halaman utama contacts dengan pesan sukses
    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan!');
    }
 public function destroy($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus!');
}
}