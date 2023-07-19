<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelahiran;
use App\Models\Kematian;
use App\Models\Pendatang;
use App\Models\Penduduk;
use App\Models\Pindah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::all()->count();
        $pindah = Pindah::all()->count();
        $pendatang = Pendatang::all()->count();
        $kematian = Kematian::all()->count();
        $kelahiran = Kelahiran::all()->count();

        return view('admin.dashboard', compact('penduduk', 'pindah', 'pendatang', 'kematian', 'kelahiran'));
    }
}
