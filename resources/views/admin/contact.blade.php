<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pesan User</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-900 text-slate-100 min-h-screen font-sans">

    @include('layouts.navbar')


    <header class="text-center pt-20 pb-10 px-6">

        <span class="inline-block bg-indigo-500/10 text-indigo-400 
        border border-indigo-500/30 px-5 py-2 rounded-full 
        text-xs font-bold tracking-widest uppercase">

            👑 ADMIN PANEL
        </span>


        <h1 class="text-4xl font-black mt-6">
            Daftar Pesan 
            <span class="text-transparent bg-clip-text 
            bg-gradient-to-r from-indigo-400 to-purple-400">
                User
            </span>
        </h1>


        <p class="text-slate-400 mt-4 max-w-2xl mx-auto text-sm">
            Halaman admin untuk melihat feedback atau pesan yang dikirim
            melalui halaman Contact website.
        </p>


    </header>



    <main class="max-w-6xl mx-auto px-6 pb-20">


        <div class="bg-slate-800/50 border border-slate-700 
        rounded-3xl p-8 shadow-xl">


            <div class="flex justify-between items-center mb-8">


                <h2 class="text-xl font-bold">
                    📩 Pesan Masuk
                </h2>


                <a href="/home"
                class="bg-indigo-600 hover:bg-indigo-700 
                px-5 py-2 rounded-xl text-sm font-bold">
                    ⬅ Kembali
                </a>


            </div>



            <div class="overflow-x-auto">


                <table class="w-full text-sm text-left">


                    <thead class="bg-slate-900 text-slate-300">


                        <tr>

                            <th class="p-4">
                                No
                            </th>

                            <th class="p-4">
                                Nama
                            </th>

                            <th class="p-4">
                                Email
                            </th>

                            <th class="p-4">
                                Pesan
                            </th>

                            <th class="p-4">
                                Tanggal
                            </th>

                        </tr>


                    </thead>



                    <tbody>


                    @forelse($semua_pesan as $index => $pesan)


                        <tr class="border-b border-slate-700 
                        hover:bg-slate-700/30">


                            <td class="p-4 text-slate-400">
                                {{ $index + 1 }}
                            </td>


                            <td class="p-4 font-bold">
                                {{ $pesan->name }}
                            </td>


                            <td class="p-4 text-slate-300">
                                {{ $pesan->email }}
                            </td>


                            <td class="p-4 text-slate-300 max-w-md">
                                {{ $pesan->message }}
                            </td>


                            <td class="p-4 text-slate-400">

                                {{ $pesan->created_at->format('d M Y, H:i') }}

                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="5"
                            class="text-center p-10 text-slate-400">

                                📭 Belum ada pesan masuk

                            </td>

                        </tr>


                    @endforelse


                    </tbody>


                </table>


            </div>


        </div>


    </main>


    @include('layouts.footer')


</body>

</html>