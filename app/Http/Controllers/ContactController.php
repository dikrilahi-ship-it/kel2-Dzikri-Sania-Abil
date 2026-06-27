<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // 1. READ: Menampilkan semua data kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    // Menampilkan halaman form tambah kontak
    public function create()
    {
        return view('contacts.create');
    }

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nomor_telepon' => 'required',
        'biodata' => 'required',
    ]);

Contact::create([
    'name'    => $request->nama,          // Ubah 'name_kontak' jadi 'name'
    'email'   => $request->nomor_telepon, 
    'message' => $request->biodata,       // Ubah 'message' jika perlu, tapi sepertinya sudah benar
]);

    return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
}

    // 3. DELETE: Hapus data
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus!');
    }

    // 4. EDIT: Menampilkan form edit
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
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

        $contact = Contact::findOrFail($id);
        
        // Ini bagian yang disesuaikan untuk update
        $contact->update([
            'name_kontak' => $request->nama,
            'email'       => $request->nomor_telepon,
            'message'     => $request->biodata,
        ]);

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diupdate!');
    }
}