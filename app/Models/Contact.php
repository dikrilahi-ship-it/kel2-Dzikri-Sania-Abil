<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Tulis ini untuk membuka izin pengisian kolom database
    protected $fillable = ['name', 'email', 'message'];
}