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
                KELOMPOK 2 • PENGENALAN LARAVEL
            </span>
            <h1 class="text-4xl sm:text-6xl font-black tracking-tighter mt-6 mb-6 uppercase leading-none">
                PENGENALAN MATERI <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-amber-400 to-indigo-400">Framework Laravel</span>
            </h1>
            <p class="text-sm sm:text-base text-slate-400 max-w-2xl mx-auto leading-relaxed mb-10">
              merupakan tugas kuliah, web ini adalah tempat ngumpulnya dokumentasi seru tentang Laravel. Kita bakal kuliti bareng seberapa cepat, rapi, dan amannya pakai framework ini.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/about" class="bg-red-600 hover:bg-red-700 text-white font-black px-8 py-4 rounded-xl shadow-lg shadow-red-600/30 transform hover:-translate-y-1 transition duration-200 text-xs uppercase tracking-wider">
                    Eksplorasi Fitur MVC
                </a>
                <a href="/contact" class="bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-black px-8 py-4 rounded-xl transform hover:-translate-y-1 transition duration-200 text-xs uppercase tracking-wider">
                    Kirim Pesan Database
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-24 flex-grow w-full">

      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
            
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
                <div class="text-3xl md:text-4xl font-black text-indigo-400 mb-1">Database</div>
                <div class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Penyimpanan</div>
                <div class="text-xs text-slate-500 mt-1">Form Input Navicat</div>
            </div>

        </div>
    </main>
    @include('layouts.footer')

</body>
</html>