<?php

namespace App\Http\Controllers;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    public function index(){
        $pembayaran=pembayaran::all();
            return view('dashboard.pembayaran.index', compact('pembayaran'));
        }
        public function create()
        {
            return view('dashboard.pembayaran.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',

        ],
        [
            'nama.required' => 'Nama pembayaran Wajib Diisi',
            'nama.min' => 'Nama pembayaran Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name' => $request->input('name'),
            'tanggal' => $request->input('tanggal'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
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
        return view('dashboard.pembayaran.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jumlah_bayar' => 'required',

        ],
        [
            'nama.required' => 'Nama pembayaran Wajib Diisi',
            'nama.min' => 'Nama pembayaran Minimal 3 Karakter',
            'nama.max' => 'Nama Jabtan Maximal 50 Karakter',
        ]);

        $data = [
            'name' => $request->input('name'),
            'tanggal' => $request->input('tanggal'),
            'jumlah_bayar' => $request->input('jumlah_bayar'),
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
