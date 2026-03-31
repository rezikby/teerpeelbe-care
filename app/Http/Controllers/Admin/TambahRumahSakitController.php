<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TambahRumahSakitRequest;
use App\Models\RumahSakit;
use Illuminate\Support\Facades\Storage;

class TambahRumahSakitController extends Controller
{
    // halaman dashboard
    public function dashboard()
    {
        $rumahSakits = RumahSakit::latest()->get();
        return view('admin.dashboard', compact('rumahSakits'));
    }

    // simpan data
    public function store(TambahRumahSakitRequest $request)
    {
        $cover = null;

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('cover_rs', 'public');
        }

        RumahSakit::create([
            'cover' => $cover,
            'nama_rumah_sakit' => $request->nama_rumah_sakit,
            'rating' => $request->rating,
            'alamat' => $request->alamat,
            'nomor_kontak' => $request->nomor_kontak,
            'kategori' => $request->kategori,
            'nomor_kamar' => $request->nomor_kamar,
            'status' => $request->status
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data rumah sakit berhasil ditambahkan');
    }

    // halaman edit
    public function edit($id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);
        $rumahSakits = RumahSakit::latest()->get();

        return view('admin.dashboard', compact('rumahSakit', 'rumahSakits'));
    }

    // update data
    public function update(TambahRumahSakitRequest $request, $id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);

        $data = [
            'nama_rumah_sakit' => $request->nama_rumah_sakit,
            'rating' => $request->rating,
            'alamat' => $request->alamat,
            'nomor_kontak' => $request->nomor_kontak,
            'kategori' => $request->kategori,
            'nomor_kamar' => $request->nomor_kamar,
            'status' => $request->status
        ];

        if ($request->hasFile('cover')) {
            // hapus cover lama jika ada
            if ($rumahSakit->cover && Storage::disk('public')->exists($rumahSakit->cover)) {
                Storage::disk('public')->delete($rumahSakit->cover);
            }

            $data['cover'] = $request->file('cover')->store('cover_rs', 'public');
        }

        $rumahSakit->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Data rumah sakit berhasil diupdate');
    }

    // hapus data
    public function destroy($id)
    {
        $rumahSakit = RumahSakit::findOrFail($id);

        if ($rumahSakit->cover && Storage::disk('public')->exists($rumahSakit->cover)) {
            Storage::disk('public')->delete($rumahSakit->cover);
        }

        $rumahSakit->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data rumah sakit berhasil dihapus');
    }
}