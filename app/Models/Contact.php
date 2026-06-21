<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Mengizinkan Laravel mengisi kolom-kolom ini secara otomatis
   protected $fillable = ['name_kontak', 'email', 'message'];
}