<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendatang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'desa_asal',
        'tanggal_datang',
        'kecamatan_asal',
        'alamat_asal',
    ];
}
