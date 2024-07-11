<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armada;
use App\Models\jenis_kendaraan;

class armadaController extends Controller
{
    public function index()
    {
        $armada = Armada::all();
        return view('dashboard.armada.index', compact('armada'));
    }

    public function create()
    {
        $jenis_kendaraan = jenis_kendaraan::all();
        return view('dashboard.armada.create', compact('jenis_kendaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'jenis_kendaraan_id' => 'required',
            'kapasitas_kursi' => 'required',
            'rating' => 'required',
        ]);

        $armada = Armada::create($request->all());

        return redirect()->route('armada.create')->with('success', 'Berhasil simpan data');
    }

    public function edit($id)
    {
        $armada = Armada::findOrFail($id);
        $jenis_kendaraan = jenis_kendaraan::all();
        return view('dashboard.armada.edit', compact('armada', 'jenis_kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'jenis_kendaraan_id' => 'required',
            'kapasitas_kursi' => 'required',
            'rating' => 'required',
        ]);

        $armada = Armada::findOrFail($id);
        $armada->update($request->all());

        return redirect()->route('armada.edit', $armada->id)->with('success', 'Berhasil mengubah data');
    }

    public function destroy($id)
    {
        $armada = Armada::findOrFail($id);
        $armada->delete();

        return redirect('/dashboard/armada')->with('success', 'Berhasil menghapus data');
    }
}
