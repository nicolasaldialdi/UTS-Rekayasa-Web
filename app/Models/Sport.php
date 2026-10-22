<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit (opsional tapi aman)
    protected $table = 'sports';

    // Daftar kolom yang diizinkan untuk diisi
    protected $fillable = [
        'name',
        'category',
        'equipment',
        'rules',
        'origin_country',
        'image',
        'description'
    ];
}