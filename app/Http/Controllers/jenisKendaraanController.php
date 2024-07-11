<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_kendaraan;
class jenisKendaraanController extends Controller
{
    public function index(){
        $jenis_kendaraan=jenis_kendaraan::all();
        return view('dashboard.jenis_kendaraan.index', compact('jenis_kendaraan'));
    }
    public function create()
        {
            return view('dashboard.jenis_kendaraan.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',

        ],
        [
            'name.required' => 'name Divisi Wajib Diisi',
            'name.min' => 'name Divisi Minimal 3 Karakter',
            'name.max' => 'name Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name' => $request->input('name'),
        ];

        jenis_kendaraan::create($data);
        return redirect()->route('jenis_kendaraan.create')->with('success', 'berhasil simpan data');

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
        $jenis_kendaraan = jenis_kendaraan::findOrFail($id);
        return view('dashboard.jenis_kendaraan.edit', compact('jenis_kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',

        ],
        [
            'name.required' => 'name Divisi Wajib Diisi',
            'name.min' => 'name Divisi Minimal 3 Karakter',
            'name.max' => 'name Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name' => $request->input('name'),
        ];

        $jenis_kendaraan = jenis_kendaraan::findOrFail($id);
        $jenis_kendaraan->update($data);
        return redirect()->route('jenis_kendaraan.edit', $jenis_kendaraan->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_kendaraan = jenis_kendaraan::findOrFail($id);
        $jenis_kendaraan->delete();
        return redirect('/dashboard/jenis_kendaraan')->with('success', 'Berhasil menghapus data!');
    }
}
 