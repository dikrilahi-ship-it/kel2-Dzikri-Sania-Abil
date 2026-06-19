<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Pesan User</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
    @include('layouts.navbar')
<body style="font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; margin: 0; padding: 40px 20px; color: #1e293b;">

    <div style="max-width: 1000px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);">
        
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #f1f5f9; padding-bottom: 20px; margin-bottom: 25px;">
            <div>
                <h2 style="margin: 0; color: #0f172a; font-size: 24px;">👑 Panel Admin - Daftar Pesan User 📩</h2>
                <p style="margin: 5px 0 0 0; color: #64748b; font-size: 14px;">Berikut adalah isi feedback atau pesan yang dikirim oleh user lewat form contact website.</p>
            </div>
            <a href="/home" style="text-decoration: none; background: #3b82f6; color: white; padding: 10px 18px; font-size: 14px; font-weight: 600; border-radius: 6px; transition: background 0.2s;" onmouseover="this.style.background='#2563eb'" onmouseout="this.style.background='#3b82f6'">
                ⬅ Kembali ke Web
            </a>
        </div>

        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
            <thead>
                <tr style="background: #1e293b; color: white;">
                    <th style="padding: 12px 16px; border-top-left-radius: 6px; border-bottom-left-radius: 6px; width: 50px; text-align: center;">No</th>
                    <th style="padding: 12px 16px;">Nama Pengirim</th>
                    <th style="padding: 12px 16px;">Email</th>
                    <th style="padding: 12px 16px;">Isi Pesan</th>
                    <th style="padding: 12px 16px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; width: 150px;">Tanggal Masuk</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($semua_pesan as $index => $pesan)
                    <tr style="border-bottom: 1px solid #e2e8f0; background: {{ $index % 2 == 0 ? '#ffffff' : '#f8fafc' }};">
                        <td style="padding: 16px; text-align: center; color: #64748b; font-weight: 500;">{{ $index + 1 }}</td>
                        <td style="padding: 16px; font-weight: 600; color: #0f172a;">{{ $pesan->name }}</td>
                        <td style="padding: 16px; color: #475569;">{{ $pesan->email }}</td>
                        <td style="padding: 16px; color: #334155; line-height: 1.5; max-width: 350px; word-wrap: break-word;">{{ $pesan->message }}</td>
                        <td style="padding: 16px; color: #64748b; font-size: 13px;">{{ $pesan->created_at->format('d M Y, H:i') }} WIB</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 40px; text-align: center; color: #94a3b8; font-weight: 500; font-size: 16px;">
                            📭 Belum ada pesan masuk dari user.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>