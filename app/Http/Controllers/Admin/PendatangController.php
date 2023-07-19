<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendatang;
use Illuminate\Http\Request;

class PendatangController extends Controller
{
    public function index()
    {
        $pendatangs = Pendatang::orderBy('id', 'desc')->get();

        return view('admin.pendatang.index', compact('pendatangs'));
    }

    public function create()
    {
        return view('admin.pendatang.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'desa_asal' => 'required',
            'tanggal_datang' => 'required',
            'kecamatan_asal' => 'required',
            'alamat_asal' => 'required',
        ]);

        $pendatang = Pendatang::create($validator);

        return redirect()->route('pendatang.index')->with('success', 'Data Pendatang Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $p = Pendatang::find($id);

        return view('admin.pendatang.edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'desa_asal' => 'required',
            'tanggal_datang' => 'required',
            'kecamatan_asal' => 'required',
            'alamat_asal' => 'required',
        ]);

        $pendatang = Pendatang::find($id)->update($validator);

        return redirect()->route('pendatang.index')->with('success', 'Data Pendatang Berhasil Di Update');
    }

    public function destroy($id)
    {
        $pendatang = Pendatang::find($id)->delete();

        return redirect()->route('pendatang.index')->with('success', 'Data Pendatang Berhasil Di Hapus');
    }
}
