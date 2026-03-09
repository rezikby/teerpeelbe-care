<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TambahRumahSakitRequest;
use App\Http\RequeTambahRumahSakitRequest;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class TambahRumahSakitController extends Controller
{
// nampil data rumah sakit
    public function index()
    {
        // kek ambil data
        return RumahSakit::all();
    }


    // create
    public function store(TambahRumahSakitRequest $request)
    {
        // nyipan gamabr ke folder storage
        $cover = $request->file('cover')->store('cover_rs', 'public');

        // create data baru
        $rumahSakit = RumahSakit::create([
            'cover' => $cover,
            'nama_rumah_sakit' => $request->nama_rumah_sakit,
            'rating' => $request->rating,
            'alamat' => $request->alamat,
            'nomor_kontak' => $request->nomor_kontak,
            'kategori' => $request->kategori,
            'nomor_kamar' => $request->nomor_kamar,
            'status' => $request->status
        ]);

        return response()->json($rumahSakit);
    }


    // nampil data by id
    public function show($id)
    {
        // cari rumahskit
        return RumahSakit::findOrFail($id);
    }


    // update rumah sakit
    public function update(TambahRumahSakitRequest $request, $id)
    {
        // mencari data rumah sakit
        $rumahSakit = RumahSakit::findOrFail($id);

        // update validasi 
        $rumahSakit->update($request->validated());

        return response()->json($rumahSakit);
    }


    //hapus
    public function destroy($id)
    {
        // ngpaus pake id
        RumahSakit::destroy($id);
        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
