<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    // Menggunakan $fillable untuk menentukan kolom mana yang bisa diisi massal
    protected $fillable = [
        'nama', 
        'deskripsi', 
        'bahan', 
        'langkah'
    ];
}
