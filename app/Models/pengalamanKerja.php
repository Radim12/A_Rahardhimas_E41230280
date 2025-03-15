<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara manual
    protected $table = 'pengalaman_kerja';

    protected $fillable = [
        'nama', 'jabatan', 'tahun_masuk', 'tahun_keluar'
    ];
}