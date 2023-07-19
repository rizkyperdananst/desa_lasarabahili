<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tanggal_kematian', 'tempat_kematian', 'penyebab_kematian'];
}
