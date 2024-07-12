<?php

namespace App\Http\Controllers;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Models\peminjaman;
class pembayaranController extends Controller
{
    public function index(){
        $pembayaran=pembayaran::all();
            return view('dashboard.pembayaran.index', compact('pembayaran'));
        }
        public function create()
        {
            $peminjaman=peminjaman::all();
            return view('dashboard.pembayaran.create', compact('peminjaman'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',
            'peminjaman_id' => 'required',

        ],
        [
            'nama.required' => 'Nama pembayaran Wajib Diisi',
            'nama.min' => 'Nama pembayaran Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'tanggal' => $request->input('tanggal'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
            'peminjaman_id' => $request->input('peminjaman_id'),
        ];

        pembayaran::create($data);
        return redirect()->route('pembayaran.create')->with('success', 'berhasil simpan data');

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
        $pembayaran = pembayaran::findOrFail($id);
        $peminjaman=peminjaman::all();
        return view('dashboard.pembayaran.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',
            'peminjaman_id' => 'required',


        ],
        [
            'nama.required' => 'Nama pembayaran Wajib Diisi',
            'nama.min' => 'Nama pembayaran Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'tanggal' => $request->input('tanggal'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
            'peminjaman_id' => $request->input('peminjaman_id'),
        ];

        $pembayaran = pembayaran::findOrFail($id);
        $pembayaran->update($data);
        return redirect()->route('pembayaran.edit', $pembayaran->id)->with('success', 'Berhasil mengubah data!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect('/dashboard/pembayaran')->with('success', 'Berhasil menghapus data!');
    }
    
}
