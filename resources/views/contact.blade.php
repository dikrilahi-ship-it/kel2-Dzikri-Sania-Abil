<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Hubungi Tim Kelompok 2</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white">

    @include('layouts.navbar')

    <header class="relative overflow-hidden text-center pt-24 pb-12 px-4 bg-gradient-to-b from-slate-950 via-slate-900 to-transparent w-full">
        <div class="absolute top-[-10%] left-[10%] w-[35rem] h-[35rem] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-1.5 bg-indigo-500/10 text-indigo-400 text-xs font-bold tracking-widest uppercase px-5 py-2 rounded-full border border-indigo-500/30 shadow-md">
                📬 HUBUNGAN INTEGRASI DATA
            </span>
            <h1 class="text-4xl sm:text-5xl font-black tracking-tight mt-6 mb-4 uppercase">
                Hubungi Kelompok <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">Kami</span>
            </h1>
            <p class="text-xs sm:text-sm text-slate-400 max-w-2xl mx-auto leading-relaxed">
                Silakan tinggalkan pesan melalui formulir interaktif di bawah ini untuk menguji fungsionalitas pengiriman data Controller ke Database Server.
            </p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 pb-24 flex-grow w-full grid md:grid-cols-5 gap-8 items-start">
        
        <div class="md:col-span-2 space-y-4">
            <div class="bg-slate-800/40 border border-slate-800 p-6 rounded-2xl backdrop-blur-xs">
                <h3 class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-4">Saluran Kontak</h3>
                
                <div class="space-y-4 text-xs sm:text-sm">
                    <div>
                        <span class="block text-slate-500 font-medium">Nama Tim:</span>
                        <span class="font-bold text-white">Kelompok 2 - Web Pro</span>
                    </div>
                    <div>
                        <span class="block text-slate-500 font-medium">Email Kelompok:</span>
                        <span class="font-bold text-slate-300">kelompok2@example.com</span>
                    </div>
                    <div>
                        <span class="block text-slate-500 font-medium">WhatsApp Official:</span>
                        <span class="font-bold text-slate-300">+62 812-3456-7890</span>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-indigo-950/50 to-slate-900 border border-indigo-900/30 p-6 rounded-2xl">
                <h4 class="text-xs font-bold text-white mb-2">📌 Catatan Validasi:</h4>
                <p class="text-[11px] text-slate-400 leading-relaxed">
                    Formulir di sebelah kanan sudah mengadopsi sistem keamanan **Tokens CSRF** bawaan Laravel untuk mencegah manipulasi form dari luar.
                </p>
            </div>
        </div>

        <div class="md:col-span-3 bg-gradient-to-br from-slate-850 to-slate-900 border border-slate-800 rounded-3xl p-8 shadow-xl">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold rounded-xl flex items-center gap-2">
                    ✨ {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan nama kamu" required 
                        class="w-full bg-slate-900/60 border border-slate-800 focus:border-indigo-500 focus:outline-none rounded-xl px-4 py-3 text-sm text-slate-200 transition">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Alamat Email</label>
                    <input type="email" name="email" placeholder="Masukkan email aktif" required 
                        class="w-full bg-slate-900/60 border border-slate-800 focus:border-indigo-500 focus:outline-none rounded-xl px-4 py-3 text-sm text-slate-200 transition">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 uppercase tracking-wider mb-2">Isi Pesan / Komentar</label>
                    <textarea name="message" placeholder="Tulis pesan kamu di sini..." rows="4" required 
                        class="w-full bg-slate-900/60 border border-slate-800 focus:border-indigo-500 focus:outline-none rounded-xl px-4 py-3 text-sm text-slate-200 transition resize-none"></textarea>
                </div>

                <button type="submit" 
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-black text-xs uppercase tracking-widest py-4 rounded-xl shadow-lg shadow-indigo-600/20 transform hover:-translate-y-0.5 transition duration-200 cursor-pointer">
                    Kirim Data Ke Server
                </button>
            </form>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>