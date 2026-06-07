<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelompok 2 - Web Resmi</title>
    <link rel="stylesheet" href="{{ asset('home.app.css') }}">
    
    <style>
        .navbar {
            background-color: #2c4257;
            padding: 15px 0;
            text-align: center;
            font-family: sans-serif;
            margin-bottom: 30px;
        }
        .navbar a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            font-size: 16px;
        }
        .navbar a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <div style="font-family: sans-serif; max-width: 600px; margin: 0 auto 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); background-color: #ffffff;">
        <h2 style="color: #007bff; margin-top: 0; font-size: 28px;">Hubungi Kami</h2>
        <p style="color: #666; margin-bottom: 20px;">Silakan tinggalkan pesan atau hubungi tim kelompok kami di bawah ini:</p>

        <div style="margin: 20px 0; background-color: #f9f9f9; padding: 15px; border-radius: 5px; border-left: 4px solid #007bff; line-height: 1.6;">
            <p style="margin: 5px 0;"><strong>Kelompok:</strong> Kelompok 2</p>
            <p style="margin: 5px 0;"><strong>Email:</strong> kelompok2@example.com</p>
            <p style="margin: 5px 0;"><strong>WhatsApp:</strong> +62 812-3456-7890</p>
        </div>

        <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            
            <div>
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Nama</label>
                <input type="text" name="name" placeholder="Masukkan nama kamu" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Email</label>
                <input type="email" name="email" placeholder="Masukkan email kamu" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #333;">Pesan</label>
                <textarea name="message" placeholder="Tulis pesan kamu di sini" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; resize: vertical;"></textarea>
            </div>

            <button type="submit" style="padding: 12px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 16px;">
                Kirim Pesan
            </button>
        </form>
    </div>

</body>
</html>