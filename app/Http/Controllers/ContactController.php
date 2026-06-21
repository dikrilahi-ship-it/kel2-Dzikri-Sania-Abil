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
    // 1. Validasi data yang masuk
    $request->validate([
        'nama' => 'required',
        'nomor_telepon' => 'required',
        'biodata' => 'nullable',
    ]);

    // 2. Simpan data ke database
    \App\Models\Contact::create([
        'name_kontak' => $request->nama,
        'email' => $request->nomor_telepon,
        'message' => $request->biodata,
    ]);

    // 3. Redirect ke halaman index setelah berhasil simpan
    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan!');
        // Kembali ke halaman utama contacts dengan pesan sukses
    }
 public function destroy($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus!');
}
// 4. UPDATE: Menampilkan form edit
public function edit($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    return view('contacts.edit', compact('contact'));
}

// 5. UPDATE: Menyimpan perubahan data
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'nomor_telepon' => 'required',
        'biodata' => 'nullable',
    ]);

    $contact = \App\Models\Contact::findOrFail($id);
    $contact->update([
        'name_kontak' => $request->nama,
        'email' => $request->nomor_telepon,
        'message' => $request->biodata,
    ]);

    return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diupdate!');
}
}