<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pindah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'desa',
        'kecamatan',
        'tanggal_pindah',
        'alasan_pindah',
        'alamat_pindah',
    ];
}
