<?php

namespace App\Http\Controllers;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index(){
        $peminjaman=peminjaman::all();
            return view('dashboard.peminjaman.index', compact('peminjaman'));
        }
        public function create()
        {
            return view('dashboard.peminjaman.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_peminjam' => 'required',
            'ktp_peminjam' => 'required',
            'keperluan_pinjam' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'biaya' => 'required',
            'armada_id' => 'required',
            'komentar_peminjam' => 'required',
            'status_pinjam' => 'required',


        ],
        [
            'nama.required' => 'Nama peminjaman Wajib Diisi',
            'nama.min' => 'Nama peminjaman Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name_peminjam' => $request->input('name_peminjam'),
            'ktp_peminjam' => $request->input('ktp_peminjam'),
            'keperluan_pinjam' => $request->input('keperluan_pinjam'),
            'mulai' => $request->input('mulai'),
            'selesai' => $request->input('selesai'),
            'armada_id' => $request->input('armada_id'),
            'komentar_peminjam' => $request->input('komentar_peminjam'),
            'status_pinjam' => $request->input('status_pinjam'),


        ];

        peminjaman::create($data);
        return redirect()->route('peminjaman.create')->with('success', 'berhasil simpan data');

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
        $request = peminjaman::findOrFail($id);
        return view('dashboard.peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_peminjam' => 'required',
            'ktp_peminjam' => 'required',
            'keperluan_pinjam' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'biaya' => 'required',
            'armada_id' => 'required',
            'komentar_peminjam' => 'required',
            'status_pinjam' => 'required',


        ],
        [
            'nama.required' => 'Nama peminjaman Wajib Diisi',
            'nama.min' => 'Nama peminjaman Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name_peminjam' => $request->input('name_peminjam'),
            'ktp_peminjam' => $request->input('ktp_peminjam'),
            'keperluan_pinjam' => $request->input('keperluan_pinjam'),
            'mulai' => $request->input('mulai'),
            'selesai' => $request->input('selesai'),
            'armada_id' => $request->input('armada_id'),
            'komentar_peminjam' => $request->input('komentar_peminjam'),
            'status_pinjam' => $request->input('status_pinjam'),


        ];

        $request = peminjaman::findOrFail($id);
        $request->update($data);
        return redirect()->route('peminjaman.edit', $request->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = peminjaman::findOrFail($id);
        $request->delete();
        return redirect('/dashboard/peminjaman')->with('success', 'Berhasil menghapus data!');
    }
}
