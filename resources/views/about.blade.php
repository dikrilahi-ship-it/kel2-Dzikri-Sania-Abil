<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Kupas Tuntas Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen flex flex-col selection:bg-blue-500 selection:text-white">

    @include('layouts.navbar')

    <header class="relative overflow-hidden text-center pt-24 pb-16 px-4 bg-gradient-to-b from-slate-950 via-slate-900 to-transparent w-full">
        <div class="absolute top-[-10%] right-[20%] w-[35rem] h-[35rem] bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-1.5 bg-blue-500/10 text-blue-400 text-xs font-bold tracking-widest uppercase px-5 py-2 rounded-full border border-blue-500/30 shadow-md">
                📖 BEDAH TEKNOLOGI FRAMEWORK
            </span>
            <h1 class="text-4xl sm:text-5xl font-black tracking-tight mt-6 mb-4 uppercase">
                Mengenal singkat <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Sistem Kerja MVC</span>
            </h1>
            <p class="text-xs sm:text-sm text-slate-400 max-w-2xl mx-auto leading-relaxed mb-6">
                Halaman ini menjelaskan secara terstruktur fondasi utama yang membuat Laravel menjadi framework nomor satu di dunia, serta bagaimana kelompok kami menerapkannya.
            </p>
            <a href="/home" class="inline-block bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-bold px-6 py-2.5 rounded-xl text-xs uppercase tracking-wider transition">
                ← Kembali ke Home
            </a>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-24 flex-grow w-full">
        
        <div class="bg-gradient-to-br from-slate-850 to-slate-900 border border-slate-800 rounded-3xl p-8 md:p-10 shadow-lg mb-12 relative overflow-hidden group">
            <h2 class="text-xl sm:text-2xl font-black text-white mb-4 flex items-center gap-2">
                💡 Konsep Dasar Laravel
            </h2>
            <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                Secara sederhana, **Laravel** adalah cetakan pengerjaan website yang membantu developer agar tidak perlu membuat fitur dari nol. Laravel menggunakan pola **MVC (Model, View, Controller)**. Konsep ini bertugas memisahkan urusan data, urusan tampilan (UI), dan urusan logika codingan agar project kelompok kami jalannya rapi, terstruktur, dan tidak berantakan dalam satu file tunggal.
            </p>
        </div>

        <div class="mb-12">
            <div class="text-center mb-8">
                <h3 class="text-xs font-bold text-blue-400 uppercase tracking-widest mb-1">Arsitektur Kode</h3>
                <h2 class="text-2xl font-extrabold text-white tracking-tight">Memahami Komponen Model, View, & Controller</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-slate-800/40 border border-slate-800 rounded-2xl p-6 hover:border-blue-500/50 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 text-blue-400 flex items-center justify-center text-lg font-bold mb-4">🛢️</div>
                        <h4 class="text-base font-bold text-white mb-2">1. Bagian MODEL</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Komponen yang bertugas penuh untuk **mengurusi database**. Dia yang memegang data, mengambil data, dan menyimpan data kiriman user dari website ke dalam server Navicat MySQL.
                        </p>
                    </div>
                    <div class="mt-4"><span class="bg-slate-900 text-slate-400 text-[10px] font-mono px-2.5 py-1 rounded-md border border-slate-800">Urusan Database</span></div>
                </div>

                <div class="bg-slate-800/40 border border-slate-800 rounded-2xl p-6 hover:border-indigo-500/50 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-lg font-bold mb-4">⚙️</div>
                        <h4 class="text-base font-bold text-white mb-2">2. Bagian CONTROLLER</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Komponen yang menjadi **otak atau jembatan**. Dialah yang berpikir, memproses logika, dan mengatur kapan data dari Model harus dilempar ke bagian tampilan depan website.
                        </p>
                    </div>
                    <div class="mt-4"><span class="bg-slate-900 text-slate-400 text-[10px] font-mono px-2.5 py-1 rounded-md border border-slate-800">Urusan Otak / Logika</span></div>
                </div>

                <div class="bg-slate-800/40 border border-slate-800 rounded-2xl p-6 hover:border-purple-500/50 transition duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center text-lg font-bold mb-4">🖥️</div>
                        <h4 class="text-base font-bold text-white mb-2">3. Bagian VIEW (Blade)</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Komponen yang mengurusi **tampilan luar (UI)** yang dilihat langsung oleh user di browser. File `home.blade.php`, `about`, dan `contact` ini adalah contoh nyata dari bagian View.
                        </p>
                    </div>
                    <div class="mt-4"><span class="bg-slate-900 text-slate-400 text-[10px] font-mono px-2.5 py-1 rounded-md border border-slate-800">Urusan Desain / UI</span></div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-slate-950 via-slate-900 to-indigo-950 border border-slate-800 rounded-[2rem] p-8 md:p-10 shadow-xl">
            <h2 class="text-xl font-bold text-white mb-6 tracking-tight flex items-center gap-2">
                🎯 Target & Capaian Belajar Kelompok 2
            </h2>
            <div class="grid sm:grid-cols-3 gap-4">
                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800 flex items-center gap-3">
                    <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-[10px]">✓</span>
                    <span class="text-xs text-slate-300">Paham Alur Data Web</span>
                </div>
                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800 flex items-center gap-3">
                    <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-[10px]">✓</span>
                    <span class="text-xs text-slate-300">Tugas Kuliah Beres</span>
                </div>
                <div class="bg-slate-950/60 p-4 rounded-xl border border-slate-800 flex items-center gap-3">
                    <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold text-[10px]">✓</span>
                    <span class="text-xs text-slate-300">Bisa Kolaborasi Git</span>
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>