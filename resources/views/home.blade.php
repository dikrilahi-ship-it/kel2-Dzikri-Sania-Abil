<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel Premium Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen flex flex-col selection:bg-red-500 selection:text-white">

    @include('layouts.navbar')
    
    <header class="relative overflow-hidden text-center pt-28 pb-24 px-4 bg-radial from-indigo-950 via-slate-950 to-slate-950 w-full">
        <div class="absolute top-[-20%] left-[20%] w-[40rem] h-[40rem] bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-[-10%] right-[10%] w-[35rem] h-[35rem] bg-red-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-1.5 bg-gradient-to-r from-red-500/20 to-indigo-500/20 text-red-400 text-xs font-bold tracking-widest uppercase px-5 py-2 rounded-full border border-red-500/30 shadow-md">
                KELOMPOK 2 • PENGENALAN LARAVEL & E-BOOK STORE
            </span>
            <h1 class="text-4xl sm:text-6xl font-black tracking-tighter mt-6 mb-6 uppercase leading-none">
                PENGENALAN MATERI <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-amber-400 to-indigo-400">Framework Laravel</span>
            </h1>
            <p class="text-sm sm:text-base text-slate-400 max-w-2xl mx-auto leading-relaxed mb-10">
                Merupakan tugas kuliah Kelompok 2. Di sini kita mengupas tuntas kehebatan ekosistem Laravel sekaligus menyediakan platform simulasi perpustakaan digital E-Book terlengkap untuk menunjang pembelajaran coding kamu!
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/about" class="bg-slate-800 hover:bg-slate-700 border border-slate-700 text-white font-black px-8 py-4 rounded-xl transform hover:-translate-y-1 transition duration-200 text-xs uppercase tracking-wider">
                    Eksplorasi Fitur Laravel
                </a>
                <a href="/ebooks" class="bg-gradient-to-r from-red-600 to-amber-500 hover:from-red-700 hover:to-amber-600 text-white font-black px-8 py-4 rounded-xl shadow-lg shadow-red-600/30 transform hover:-translate-y-1 transition duration-200 text-xs uppercase tracking-wider flex items-center gap-2">
                    ⚡ Buka Toko E-Book Digital
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-24 flex-grow w-full space-y-20">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-slate-800/40 border border-slate-800 p-6 rounded-2xl text-center backdrop-blur-xs">
                <div class="text-3xl md:text-4xl font-black text-red-500 mb-1">Halaman</div>
                <div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Menu Utama</div>
                <div class="text-xs text-slate-500 mt-1">Home • About • Contact</div>
            </div>
            
            <div class="bg-slate-800/40 border border-slate-800 p-6 rounded-2xl text-center backdrop-blur-xs">
                <div class="text-3xl md:text-4xl font-black text-amber-400 mb-1">Desain</div>
                <div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Gaya Tampilan</div>
                <div class="text-xs text-slate-500 mt-1">Tailwind CSS Modern</div>
            </div>
            
            <div class="bg-slate-800/40 border border-slate-800 p-6 rounded-2xl text-center backdrop-blur-xs">
                <div class="text-3xl md:text-4xl font-black text-emerald-400 mb-1">Laravel</div>
                <div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Sistem Kerja</div>
                <div class="text-xs text-slate-500 mt-1">Blade Template Engine</div>
            </div>
            
            <div class="bg-slate-800/40 border border-slate-800 p-6 rounded-2xl text-center backdrop-blur-xs">
                <div class="text-3xl md:text-4xl font-black text-indigo-400 mb-1">E-Book</div>
                <div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">CRUD Simpan</div>
                <div class="text-xs text-slate-500 mt-1">Database Cloud / Navicat</div>
            </div>
        </div>

        <section id="fitur-laravel" class="space-y-8 scroll-mt-28">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl sm:text-3xl font-black uppercase tracking-tight">Kenapa Harus <span class="text-red-500">Laravel</span>?</h2>
                <p class="text-xs sm:text-sm text-slate-400 mt-2">Tiga pilar utama yang bikin Laravel dinobatkan jadi framework PHP paling populer di dunia.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 bg-slate-850 border border-slate-800 rounded-2xl hover:border-red-500/30 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-red-500/10 flex items-center justify-center border border-red-500/20 mb-4 text-red-400 font-bold">🛡️</div>
                    <h3 class="text-base font-bold mb-2">Keamanan Super Ketat</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">Laravel otomatis jagain aplikasi kelompok kita dari serangan hacker jahat seperti SQL Injection, XSS, dan CSRF token lewat proteksi bawaannya.</p>
                </div>
                <div class="p-6 bg-slate-850 border border-slate-800 rounded-2xl hover:border-amber-500/30 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center border border-amber-500/20 mb-4 text-amber-400 font-bold">🚀</div>
                    <h3 class="text-base font-bold mb-2">Arsitektur MVC Rapi</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">Pemisahan alur kodingan antara Model (Database), View (Tampilan), dan Controller (Logika) bikin struktur file kelompok kita terorganisir.</p>
                </div>
                <div class="p-6 bg-slate-850 border border-slate-800 rounded-2xl hover:border-indigo-500/30 transition duration-300">
                    <div class="w-10 h-10 rounded-xl bg-indigo-500/10 flex items-center justify-center border border-indigo-500/20 mb-4 text-indigo-400 font-bold">⚙️</div>
                    <h3 class="text-base font-bold mb-2">Artisan CLI Jenius</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">Bikin controller, model, file database migration, sampai jalanin server lokal tinggal ketik satu baris perintah di terminal terminal kesayangan lu.</p>
                </div>
            </div>
        </section>

    </main>
    
    @include('layouts.footer')

</body>
</html>