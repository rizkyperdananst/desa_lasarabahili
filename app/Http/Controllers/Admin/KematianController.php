<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    public function index()
    {
        $kematians = Kematian::orderBy('id', 'desc')->get();

        return view('admin.kematian.index', compact('kematians'));
    }

    public function create()
    {
        return view('admin.kematian.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tanggal_kematian' => 'required',
            'tempat_kematian' => 'required',
            'penyebab_kematian' => 'required',
        ]);

        $kematian = Kematian::create($validator);

        return redirect()->route('kematian.index')->with('success', 'Data Kematian Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $k = Kematian::find($id);

        return view('admin.kematian.edit', compact('k'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tanggal_kematian' => 'required',
            'tempat_kematian' => 'required',
            'penyebab_kematian' => 'required',
        ]);

        $kematian = Kematian::find($id)->update($validator);

        return redirect()->route('kematian.index')->with('success', 'Data Kematian Berhasil Di Update');
    }

    public function destroy($id)
    {
        $kematian = Kematian::find($id)->delete();

        return redirect()->route('kematian.index')->with('success', 'Data Kematian Berhasil Di Hapus');
    }
}
