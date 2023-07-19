<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pindah;
use Illuminate\Http\Request;

class PindahController extends Controller
{
    public function index()
    {
        $pindahs = Pindah::orderBy('id', 'desc')->get();

        return view('admin.pindah.index', compact('pindahs'));
    }

    public function create()
    {
        return view('admin.pindah.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'tanggal_pindah' => 'required',
            'alasan_pindah' => 'required',
            'alamat_pindah' => 'required',
        ]);

        $pindah = Pindah::create($validator);

        return redirect()->route('pindah.index')->with('success', 'Data Pindah Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $p = Pindah::find($id);

        return view('admin.pindah.detail', compact('p'));
    }

    public function edit($id)
    {
        $p = Pindah::find($id);

        return view('admin.pindah.edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'tanggal_pindah' => 'required',
            'alasan_pindah' => 'required',
            'alamat_pindah' => 'required',
        ]);

        $pindah = Pindah::find($id)->update($validator);

        return redirect()->route('pindah.index')->with('success', 'Data Pindah Berhasil Di Update');
    }

    public function destroy($id)
    {
        $pindah = Pindah::find($id)->delete();

        return redirect()->route('pindah.index')->with('success', 'Data Pindah Berhasil Di Hapus');
    }
}
