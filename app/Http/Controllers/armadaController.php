<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armada;
use App\Models\jenis_kendaraan;
class armadaController extends Controller
{
    public function index(){
    $armada=armada::all();
        return view('dashboard.armada.index', compact('armada'));
    }

        public function create()
        {
            $jenis_kendaraan=jenis_kendaraan::all();
            return view('dashboard.armada.create', compact('jenis_kendaraan'));
        }

    /**
     * Store a newly created resource in storage.
     */
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

        ],
        [
            'name.required' => 'name merk Wajib Diisi',
            'name.min' => 'name merk Minimal 3 Karakter',
            'name.max' => 'name Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'merk' => $request->input('merk'),
            'nopol' => $request->input('nopol'),
            'thn_beli' => $request->input('thn_beli'),
            'deskripsi' => $request->input('deskripsi'),
            'jenis_kendaraan_id' => $request->input('jenis_kendaraan_id'),
            'kapasitas_kursi' => $request->input('kapasitas_kursi'),
            'rating' => $request->input('rating'),
        ];
        armada::create($data);
        return redirect()->route('armada.create')->with('success', 'berhasil simpan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $armada = armada::findOrFail($id);
        $jenis_kendaraan=jenis_kendaraan::all();
        return view('dashboard.armada.edit', compact('jenis_kendaraan'));
        
    }

    /**
     * Update the specified resource in storage.
     */
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
        ],
        [
            'name.required' => 'name merk Wajib Diisi',
            'name.min' => 'name Minimal 3 Karakter',
            'name.max' => 'name Jabtan Maximal 50 Karakter',
        
        ]);

        $data = [
            'merk' => $request->input('merk'),
            'nopol' => $request->input('nopol'),
            'thn_beli' => $request->input('thn_beli'),
            'deskripsi' => $request->input('deskripsi'),
            'jenis_kendaraan_id' => $request->input('jenis_kendaraan_id'),
            'kapasitas_kursi' => $request->input('kapasitas_kursi'),
            'rating' => $request->input('rating'),
        ];

        $armada = armada::findOrFail($id);
        $armada->update($data);
        return redirect()->route('armada.edit', $armada->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $armada = armada::findOrFail($id);
        $armada->delete();
        return redirect('/dashboard/armada')->with('success', 'Berhasil menghapus data!');
    }
}