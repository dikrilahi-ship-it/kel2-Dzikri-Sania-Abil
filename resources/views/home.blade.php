<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pengenalan Laravel</title>

    <link rel="stylesheet" href="{{ asset('home.app.css') }}">
</head>
<body>

    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">

        <h1>Selamat Datang di Website Pengenalan Laravel</h1>

        <p class="intro">
            Website ini dibuat sebagai media pembelajaran Framework Laravel.
            Melalui website ini, pengguna dapat mengenal Laravel, memahami
            kegunaannya, dan mempelajari konsep dasar pengembangan web.
        </p>

        <div class="card">
            <h2>Tentang Website</h2>
            <p>
                Website ini terdiri dari beberapa halaman yang menjelaskan
                informasi mengenai Laravel serta profil pembuat website.
            </p>
        </div>

        <div class="card">
            <h2>Tujuan Website</h2>
            <ul>
                <li>Mempelajari Framework Laravel.</li>
                <li>Memahami konsep Route, Controller, dan View.</li>
                <li>Memenuhi tugas mata kuliah Pemrograman Web.</li>
                <li>Melatih kerja sama dalam pengembangan website.</li>
            </ul>
        </div>

    </div>

</body>
</html>