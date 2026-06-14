<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Ini nama tabel kamu di Navicat, pastikan namanya sama persis (misal: contacts)
    protected $table = 'contacts'; 

    // Trik Level Dewa: Membuka gembok proteksi Laravel agar data bebas masuk ke Navicat
    protected $guarded = []; 
}