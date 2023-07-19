<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::orderBy('id', 'desc')->get();

        return view('admin.penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        return view('admin.penduduk.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nik' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'status_kawin' => 'required',
            'pekerjaan' => 'required',
        ]);

        $penduduk = Penduduk::create($validator);

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $p = Penduduk::find($id);

        return view('admin.penduduk.detail', compact('p'));
    }

    public function edit($id)
    {
        $p = Penduduk::find($id);

        return view('admin.penduduk.edit', compact('p'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nik' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'status_kawin' => 'required',
            'pekerjaan' => 'required',
        ]);

        $penduduk = Penduduk::find($id)->update($validator);

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Di Update');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::find($id)->delete();

        return redirect()->route('penduduk.index')->with('success', 'Data Penduduk Berhasil Di Hapus');
    }
}
