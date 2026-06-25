<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Hubungi Tim Kelompok 2</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased font-sans min-h-screen flex flex-col">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    @include('layouts.navbar')

    <header class="text-center pt-24 pb-10 px-4 bg-gradient-to-b from-slate-950 to-slate-900 w-full">
        <div class="max-w-3xl mx-auto">
            <span class="inline-flex items-center gap-2 bg-indigo-500/10 text-indigo-400 text-xs font-semibold tracking-widest uppercase px-5 py-2 rounded-full border border-indigo-500/30">
                <i class="ti ti-mail text-sm"></i> Hubungan Integrasi Data
            </span>
            <h1 class="text-4xl sm:text-5xl font-black tracking-tight mt-5 mb-4 uppercase">
                Hubungi Kelompok <span class="text-indigo-400">Kami</span>
            </h1>
            <p class="text-slate-400 text-sm max-w-2xl mx-auto leading-relaxed">
                Tinggalkan masukan atau feedback kamu melalui formulir di bawah ini. Setiap saran sangat berarti untuk menguji fungsionalitas pengiriman data ke database server kami.
            </p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-6 pb-24 flex-grow w-full">

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold rounded-xl flex items-center gap-2">
                <i class="ti ti-circle-check text-base"></i> {{ session('success') }}
            </div>
        @endif

        <div class="grid md:grid-cols-5 gap-6 items-start">

            <!-- Info Kontak -->
            <div class="md:col-span-2 bg-slate-800 border border-slate-700/60 rounded-2xl p-6 space-y-5">
                <h3 class="text-xs font-bold text-indigo-400 uppercase tracking-widest flex items-center gap-2">
                    <i class="ti ti-address-book"></i> Saluran Kontak
                </h3>
                <div class="space-y-4 text-sm">
                    <div class="flex items-start gap-3">
                        <i class="ti ti-users text-slate-500 mt-0.5"></i>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">Nama Tim</p>
                            <p class="font-bold text-white">Kelompok 2 — Tsania, Dzikri, Abil</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="ti ti-mail text-slate-500 mt-0.5"></i>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">Email Kelompok</p>
                            <p class="font-bold text-slate-300">kelompok2@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="ti ti-brand-whatsapp text-slate-500 mt-0.5"></i>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">WhatsApp Official</p>
                            <p class="font-bold text-slate-300">+62 815-1138-0921</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 border-t border-slate-700">
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Respon biasanya diberikan dalam 1x24 jam pada hari kerja.
                    </p>
                </div>
            </div>

            <!-- Form -->
            <div class="md:col-span-3 bg-slate-800 border border-slate-700/60 rounded-2xl p-7">
                <h3 class="text-xs font-bold text-indigo-400 uppercase tracking-widest flex items-center gap-2 mb-6">
                    <i class="ti ti-send"></i> Kirim Pesan
                </h3>
                <form action="{{ route('contacts.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" required placeholder="Masukkan nama lengkap kamu"
                            class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-indigo-500 transition placeholder:text-slate-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Alamat Email</label>
                        <input type="text" name="nomor_telepon" required placeholder="contoh@email.com"
                            class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-indigo-500 transition placeholder:text-slate-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Isi Pesan</label>
                        <textarea name="biodata" rows="4" required placeholder="Tulis pesan atau masukan kamu di sini..."
                            class="w-full bg-slate-900 border border-slate-700 rounded-xl px-4 py-3 text-sm text-slate-200 focus:outline-none focus:border-indigo-500 transition placeholder:text-slate-600 resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-sm py-3.5 rounded-xl transition cursor-pointer">
                        <i class="ti ti-send text-base"></i> Kirim Data Ke Server
                    </button>
                </form>
            </div>

        </div>
    </main>

    @include('layouts.footer')

</body>
</html>