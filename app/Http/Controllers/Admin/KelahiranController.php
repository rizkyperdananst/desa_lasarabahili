<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelahiran;
use App\Models\Kematian;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    public function index()
    {
        $kelahirans = Kelahiran::orderBy('id', 'desc')->get();

        return view('admin.kelahiran.index', compact('kelahirans'));
    }

    public function create()
    {
        return view('admin.kelahiran.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ]);

        $kelahiran = Kelahiran::create($validator);

        return redirect()->route('kelahiran.index')->with('success', 'Data Kelahiran Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $k = Kelahiran::find($id);

        return view('admin.kelahiran.edit', compact('k'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ]);

        $kelahiran = Kelahiran::find($id)->update($validator);

        return redirect()->route('kelahiran.index')->with('success', 'Data Kelahiran Berhasil Di Update');
    }

    public function destroy($id)
    {
        $kelahiran = Kelahiran::find($id)->delete();

        return redirect()->route('kelahiran.index')->with('success', 'Data Kelahiran Berhasil Di Hapuss');
    }
}
