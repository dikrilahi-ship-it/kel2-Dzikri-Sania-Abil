<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Ini wajib ada biar gak error 'MassAssignmentException'
 protected $fillable = ['name', 'email', 'message'];
}