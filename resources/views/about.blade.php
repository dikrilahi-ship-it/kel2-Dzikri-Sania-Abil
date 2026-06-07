<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Laravel</title>

    <link rel="stylesheet" href="{{ asset('home.app.css') }}">

    <style>
        :root {
            --primary: #0f172a;
            --primary-light: #1e293b;
            --accent: #3b82f6;
            --accent-gradient: linear-gradient(135deg, #3b82f6, #1d4ed8);
            --text-main: #334155;
            --text-title: #0f172a;
            --text-muted: #64748b;
            --bg-global: #f8fafc;
            --border-color: #e2e8f0;
            
            --shadow-sm: 0 1px 3px rgba(15, 23, 42, 0.03), 0 1px 2px rgba(15, 23, 42, 0.06);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.05), 0 8px 10px -6px rgba(15, 23, 42, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(15, 23, 42, 0.08), 0 10px 10px -5px rgba(15, 23, 42, 0.04);
            
            --transition-smooth: all 0.3s ease;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-global);
            color: var(--text-main);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* PREMIUM NAVBAR (GLASSMORPHISM) */
        .nav {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .nav-container {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .nav a {
            color: #94a3b8;
            text-decoration: none;
            padding: 20px 24px;
            font-weight: 600;
            font-size: 14.5px;
            letter-spacing: 0.3px;
            transition: var(--transition-smooth);
            position: relative;
        }

        .nav a:hover, .nav a.active {
            color: #ffffff;
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--accent);
            border-radius: 3px 3px 0 0;
            transition: var(--transition-smooth);
            transform: translateX(-50%);
        }

        .nav a:hover::after, .nav a.active::after {
            width: 50%;
        }

        /* HERO SECTION */
        .hero {
            text-align: center;
            padding: 100px 24px 60px;
            background: radial-gradient(100% 100% at top center, rgba(59, 130, 246, 0.08) 0%, rgba(248, 250, 252, 0) 100%);
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary), #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -1px;
        }

        .hero p {
            max-width: 680px;
            margin: 0 auto 32px;
            color: var(--text-muted);
            font-size: 19px;
            font-weight: 400;
        }

        /* CONTAINER & LUXURY CARDS */
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 24px 60px;
        }

        .card {
            background: #ffffff;
            border-radius: 20px;
            padding: 36px;
            box-shadow: var(--shadow-md);
            margin-bottom: 30px;
            border: 1px solid var(--border-color);
            transition: var(--transition-smooth);
            /* Pastikan tidak ada transform mengambang di sini */
        }

        .card:hover {
            /* HAPUS: transform: translateY(-4px); */
            /* Cukup ganti warna border dan bayangan sedikit lebih tegas agar terasa interaktif */
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 8px 15px -6px rgba(15, 23, 42, 0.08);
        }

        .card h2 {
            color: var(--text-title);
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .card p {
            color: var(--text-main);
            font-size: 16px;
        }

        /* THE GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .grid .card {
            margin-bottom: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* HIGHLIGHT SPECIAL CARD */
        .highlight {
            border-left: 6px solid var(--accent);
            background: linear-gradient(90deg, #ffffff 0%, #fdfeff 100%);
        }

        /* CUSTOM MODERN BADGES */
        .badge-container {
            margin-top: 24px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 13px;
            font-weight: 600;
            background: #eff6ff;
            color: #2563eb;
            border: 1px solid #dbeafe;
            transition: var(--transition-smooth);
        }

        .card:hover .badge {
            background: var(--accent);
            color: #ffffff;
            border-color: var(--accent);
        }

        /* MODERN LIST WITH SVG ICON */
        .card ul {
            list-style: none;
            margin-top: 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        .card ul li {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--text-main);
            font-size: 15.5px;
            font-weight: 500;
        }

        .list-icon {
            flex-shrink: 0;
            width: 22px;
            height: 22px;
            background: #dcfce7;
            color: #16a34a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* CALL TO ACTION BUTTON */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: var(--accent-gradient);
            color: #ffffff;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
            transition: var(--transition-smooth);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            /* HAPUS: transform: translateY(-2px) scale(1.02); */
            /* Cukup ganti sedikit bayangan agar terasa ditekan/aktif */
            box-shadow: 0 2px 8px rgba(59, 130, 246, 0.4);
            color: #ffffff;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 50px 24px;
            color: var(--text-muted);
            font-size: 14.5px;
            font-weight: 500;
            border-top: 1px solid var(--border-color);
            background: #ffffff;
        }
    </style>
</head>

<body>

    <div class="nav">
        <div class="nav-container">
            <a href="/">Home</a>
            <a href="/about" class="active">About</a>
            <a href="/contact">Contact</a>
        </div>
    </div>

    <div class="hero">
        <h1>Tentang Laravel</h1>
        <p>
            Framework PHP modern yang digunakan untuk membangun aplikasi web dengan cepat, rapi, dan scalable menggunakan konsep MVC.
        </p>
        <a href="/" class="btn">Kembali ke Home</a>
    </div>

    <div class="container">

        <div class="card highlight">
            <h2>Apa itu Laravel?</h2>
            <p>
                Laravel adalah framework PHP open-source yang dirancang untuk membuat pengembangan web menjadi lebih cepat,
                aman, dan terstruktur. Laravel menggunakan konsep MVC (Model, View, Controller) yang memisahkan logika,
                tampilan, dan data.
            </p>
        </div>

        <div class="grid">

            <div class="card">
                <div>
                    <h2>Routing</h2>
                    <p>Mengatur semua akses URL aplikasi Laravel dengan rapi dan terstruktur.</p>
                </div>
                <div class="badge-container">
                    <span class="badge">web.php</span>
                    <span class="badge">URL</span>
                </div>
            </div>

            <div class="card">
                <div>
                    <h2>Controller</h2>
                    <p>Tempat mengatur logic aplikasi sebelum data dikirim ke tampilan.</p>
                </div>
                <div class="badge-container">
                    <span class="badge">Logic</span>
                    <span class="badge">MVC</span>
                </div>
            </div>

            <div class="card">
                <div>
                    <h2>View (Blade)</h2>
                    <p>Tampilan UI yang dilihat user dengan template Blade Laravel.</p>
                </div>
                <div class="badge-container">
                    <span class="badge">UI</span>
                    <span class="badge">Blade</span>
                </div>
            </div>

        </div>

        <div class="card">
            <h2>Tujuan Belajar Laravel</h2>
            <p>
                Dengan mempelajari Laravel, kita dapat membangun aplikasi web modern dengan struktur yang jelas dan mudah dikembangkan.
            </p>

            <ul>
                <li>
                    <span class="list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    Menguasai konsep MVC secara benar
                </li>
                <li>
                    <span class="list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    Membuat aplikasi web profesional
                </li>
                <li>
                    <span class="list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    Memahami alur backend development
                </li>
                <li>
                    <span class="list-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    Siap kerja di project nyata
                </li>
            </ul>
        </div>

    </div>

    <div class="footer">
        Dibuat untuk pembelajaran Laravel🚀
    </div>

</body>
</html>