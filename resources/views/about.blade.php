<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-50 text-slate-700 antialiased font-sans min-h-screen flex flex-col">

    <nav class="bg-slate-900 text-slate-400 sticky top-0 z-50 border-b border-slate-800">
        <div class="max-w-5xl mx-auto flex justify-center gap-4">
            <a href="/" class="py-5 px-6 font-semibold hover:text-white transition">Home</a>
            <a href="/about" class="py-5 px-6 font-semibold text-white border-b-2 border-blue-500">About</a>
            <a href="/contact" class="py-5 px-6 font-semibold hover:text-white transition">Contact</a>
        </div>
    </nav>

    <header class="text-center py-16 px-4 bg-gradient-to-b from-blue-50/50 to-transparent">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">Tentang Laravel</h1>
        <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-6">
            Framework PHP modern yang dirancang untuk membangun aplikasi web dengan cepat, rapi, dan mudah dikembangkan menggunakan konsep MVC.
        </p>
        <a href="/" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full shadow-md hover:shadow-lg transition">Kembali ke Home</a>
    </header>

    <main class="max-w-5xl mx-auto px-6 pb-16 flex-grow w-full">
        
        <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm border-l-4 border-l-blue-500 mb-8 hover:border-slate-300 transition duration-300">
            <h2 class="text-2xl font-bold text-slate-900 mb-3">Apa itu Laravel?</h2>
            <p class="leading-relaxed">
                Laravel adalah framework PHP open-source yang membantu developer membuat website secara terstruktur. Dengan konsep MVC (Model, View, Controller), Laravel memisahkan logika coding, tampilan UI, dan pengelolaan database agar project kelompok jadi lebih rapi dan tidak berantakan.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:border-blue-300 transition duration-300 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Routing</h3>
                    <p class="text-sm text-slate-600">Mengatur semua rute akses URL aplikasi web dengan rapi.</p>
                </div>
                <div class="mt-4 flex gap-2"><span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">web.php</span></div>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:border-blue-300 transition duration-300 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Controller</h3>
                    <p class="text-sm text-slate-600">Tempat menaruh semua logika utama aplikasi sebelum dilempar ke UI.</p>
                </div>
                <div class="mt-4 flex gap-2"><span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Logic</span></div>
            </div>

            <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:border-blue-300 transition duration-300 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">View (Blade)</h3>
                    <p class="text-sm text-slate-600">Sistem template bawaan Laravel untuk mengurus tampilan UI user.</p>
                </div>
                <div class="mt-4 flex gap-2"><span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Blade UI</span></div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:border-slate-300 transition duration-300">
            <h2 class="text-2xl font-bold text-slate-900 mb-4">Tujuan Belajar</h2>
            <ul class="grid sm:grid-cols-2 gap-4 font-medium">
                <li class="flex items-center gap-3"><span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold">✓</span> Memahami cara kerja laravel</li>
                <li class="flex items-center gap-3"><span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold">✓</span> Memenuhi tugas matakuliah pemrograman web</li>
                <li class="flex items-center gap-3"><span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold">✓</span> Belajar cara ngepush projek ke github</li>
            </ul>
        </div>

    </main>

    <footer class="bg-white text-center py-6 text-sm text-slate-400 border-t border-slate-200">
        Dibuat untuk pembelajaran Laravel • Kelompok 2 
    </footer>

</body>
</html>