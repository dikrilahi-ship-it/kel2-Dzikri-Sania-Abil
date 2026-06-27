<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Store - Kelompok 2</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .modal { transition: opacity 0.25s ease; }
        body.modal-active { overflow: hidden; }
        /* Glassmorphism Effect */
        .glass { background: rgba(30, 41, 59, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 antialiased font-sans min-h-screen flex flex-col">

    @include('layouts.navbar')

    <header class="relative overflow-hidden text-center pt-24 pb-12 px-4 bg-gradient-to-b from-slate-950 via-slate-900/50 to-transparent w-full">
        <div class="relative max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-1.5 bg-red-500/10 text-red-400 text-xs font-bold tracking-widest uppercase px-5 py-2 rounded-full border border-red-500/30 shadow-md">
                📚 PLATFORM PERPUSTAKAAN DIGITAL
            </span>
            <h1 class="text-4xl sm:text-5xl font-black tracking-tight mt-6 mb-4 uppercase">
                Katalog <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-400">E-Book Premium</span>
            </h1>
            <div class="space-y-4">
                <p class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto mt-2 leading-relaxed">
                    Jelajahi koleksi bacaan berkualitas untuk memperluas wawasan Anda. Kami menyediakan berbagai pilihan buku belajar pilihan yang dapat Anda akses secara <strong>gratis</strong>, kapan saja, dan di mana saja.
                </p>
                <p class="text-amber-500/80 text-xs sm:text-sm font-medium italic">
                    Punya rekomendasi buku menarik? Jangan ragu untuk berbagi dengan kami melalui form saran yang tersedia.
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-24 flex-grow w-full space-y-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <h2 class="text-xl font-bold text-red-500 uppercase tracking-wider">📋 Koleksi E-Book Digital</h2>
            @if(auth()->user()->role !== 'user')
                <button onclick="toggleModal('modal-create')" class="bg-gradient-to-r from-red-600 to-amber-500 text-white font-black text-xs uppercase tracking-widest px-5 py-3 rounded-xl shadow-lg hover:shadow-red-500/20 transition hover:scale-105 cursor-pointer">
                    + Tambah E-Book Baru
                </button>
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($books as $book)
                <div class="glass bg-slate-800/50 rounded-2xl overflow-hidden shadow-xl flex flex-col justify-between border border-slate-700/50 hover:border-slate-600 transition duration-300">
                    <div>
                        <div class="relative h-48 w-full bg-slate-950 overflow-hidden border-b border-slate-700/50">
                            <img src="{{ $book->image }}" alt="Cover" class="w-full h-full object-cover opacity-85 hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-5 space-y-2">
                            <h3 class="text-base font-bold text-white tracking-tight">📕 {{ $book->judul }}</h3>
                            <p class="text-xs text-slate-400">Penulis: <span class="text-slate-200">{{ $book->penulis }}</span></p>
                        </div>
                    </div>

                    <div class="p-5 pt-0 mt-2">
                        <div class="pt-4 border-t border-slate-700/50">
                            @if(auth()->user()->role !== 'user')
                                <div class="grid grid-cols-2 gap-2 w-full">
                                    <button onclick="openEditModal({{ json_encode($book) }})" class="text-center bg-slate-700 hover:bg-amber-500 hover:text-slate-950 text-slate-200 text-xs py-2 rounded-xl font-bold transition cursor-pointer">
                                        ✏️ Edit
                                    </button>
                                    <form action="/ebooks/{{ $book->id }}/delete" method="POST" onsubmit="return confirm('Yakin mau menghapus buku ini?')">
                                        @csrf
                                        <button type="submit" class="w-full text-center bg-slate-700 hover:bg-red-600 text-slate-200 text-xs py-2 rounded-xl font-bold transition cursor-pointer">
                                            🗑️ Hapus
                                        </button>
                                    </form>
                                </div>
                            @else
                                @if($book->file_pdf)
                                    <a href="{{ $book->file_pdf }}" download class="w-full text-center bg-gradient-to-r from-emerald-600 to-teal-500 text-white text-xs px-4 py-2.5 rounded-xl font-bold shadow-md block hover:scale-102 transition">
                                        📥 Download E-Book (PDF)
                                    </a>
                                @else
                                    <button onclick="alert('File PDF belum diupload oleh admin.')" class="w-full text-center bg-slate-800 text-slate-500 text-xs px-4 py-2.5 rounded-xl font-bold block cursor-not-allowed">
                                        ⚠️ PDF Belum Tersedia
                                    </button>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-slate-850 border border-slate-800 p-12 rounded-3xl text-center">
                    <p class="text-sm text-slate-500">Katalog kosong. Belum ada E-Book di database.</p>
                </div>
            @endforelse
        </div>
    </main>

    <div id="modal-create" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
        <div class="modal-overlay absolute w-full h-full bg-slate-950/80 backdrop-blur-sm" onclick="toggleModal('modal-create')"></div>
        <div class="glass modal-container border border-slate-700 w-11/12 md:max-w-md mx-auto rounded-3xl shadow-2xl z-50 overflow-y-auto max-h-[90vh]">
            <div class="modal-content py-6 text-left px-6 space-y-4">
                <div class="flex justify-between items-center pb-2 border-b border-slate-700">
                    <p class="text-xl font-black text-red-500 uppercase tracking-tight">➕ Tambah E-Book</p>
                    <div class="modal-close cursor-pointer z-50 p-1 text-slate-400 hover:text-white" onclick="toggleModal('modal-create')">❌</div>
                </div>
                <form action="/ebooks/store" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                    @csrf
                    <div>
                        <label class="block mb-2">Judul E-Book</label>
                        <input type="text" name="judul" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-red-500 font-normal">
                    </div>
                    <div>
                        <label class="block mb-2">Nama Penulis</label>
                        <input type="text" name="penulis" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-red-500 font-normal">
                    </div>
                    <div>
                        <label class="block mb-2">Sampul Gambar</label>
                        <input type="file" name="image" accept="image/*" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2 text-sm text-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 file:cursor-pointer cursor-pointer">
                    </div>
                    <div>
                        <label class="block mb-2 text-amber-400">Upload File E-Book (Murni PDF)</label>
                        <input type="file" name="ebook_file" required accept=".pdf" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2 text-sm text-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 file:cursor-pointer cursor-pointer">
                    </div>
                    <div class="flex justify-end gap-2 pt-2">
                        <button type="button" onclick="toggleModal('modal-create')" class="bg-slate-800 hover:bg-slate-700 text-slate-300 px-4 py-2.5 rounded-xl">Batal</button>
                        <button type="submit" class="bg-gradient-to-r from-red-600 to-amber-500 text-white px-5 py-2.5 rounded-xl">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modal-edit" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
        <div class="modal-overlay absolute w-full h-full bg-slate-950/80 backdrop-blur-sm" onclick="toggleModal('modal-edit')"></div>
        <div class="glass modal-container border border-slate-700 w-11/12 md:max-w-md mx-auto rounded-3xl shadow-2xl z-50 overflow-y-auto max-h-[90vh]">
            <div class="modal-content py-6 text-left px-6 space-y-4">
                <div class="flex justify-between items-center pb-2 border-b border-slate-700">
                    <p class="text-xl font-black text-amber-500 uppercase tracking-tight">✏️ Edit E-Book</p>
                    <div class="modal-close cursor-pointer z-50 p-1 text-slate-400 hover:text-white" onclick="toggleModal('modal-edit')">❌</div>
                </div>
                <form id="form-edit" action="" method="POST" enctype="multipart/form-data" class="space-y-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                    @csrf
                    <div>
                        <label class="block mb-2">Judul E-Book</label>
                        <input type="text" id="edit-judul" name="judul" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-amber-500 font-normal">
                    </div>
                    <div>
                        <label class="block mb-2">Nama Penulis</label>
                        <input type="text" id="edit-penulis" name="penulis" required class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-amber-500 font-normal">
                    </div>
                    <div>
                        <label class="block mb-2">Ganti Sampul Gambar</label>
                        <input type="file" name="image" accept="image/*" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2 text-sm text-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 file:cursor-pointer cursor-pointer">
                    </div>
                    <div>
                        <label class="block mb-2 text-amber-400">Ganti File PDF E-Book</label>
                        <input type="file" name="ebook_file" accept=".pdf" class="w-full bg-slate-950 border border-slate-700 rounded-xl px-4 py-2 text-sm text-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-slate-700 file:text-slate-200 hover:file:bg-slate-600 file:cursor-pointer cursor-pointer">
                    </div>
                    <div class="flex justify-end gap-2 pt-2">
                        <button type="button" onclick="toggleModal('modal-edit')" class="bg-slate-800 hover:bg-slate-700 text-slate-300 px-4 py-2.5 rounded-xl">Batal</button>
                        <button type="submit" class="bg-amber-500 text-slate-950 px-5 py-2.5 rounded-xl">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.toggle('opacity-0');
                modal.classList.toggle('pointer-events-none');
                document.body.classList.toggle('modal-active');
            }
        }

        function openEditModal(book) {
            const formEdit = document.getElementById('form-edit');
            if (formEdit) {
                formEdit.setAttribute('action', '/ebooks/' + book.id + '/update');
                document.getElementById('edit-judul').value = book.judul;
                document.getElementById('edit-penulis').value = book.penulis;
                toggleModal('modal-edit');
            }
        }
    </script>
</body>
</html>