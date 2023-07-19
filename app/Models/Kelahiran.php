<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $fillable = ['nama','tanggal_lahir', 'nama_ayah', 'nama_ibu'];
}
