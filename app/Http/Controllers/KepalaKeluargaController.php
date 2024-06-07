<?php

namespace App\Http\Controllers;

use App\Models\KepalaKeluarga;
use App\Models\Lingkungan;
use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
    public function index($lingkunganId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        
        $kepalaKeluargas = KepalaKeluarga::where('lingkungan_id', $lingkunganId)->get();
        return view('kepala_keluargas.index', compact('lingkungan', 'kepalaKeluargas'));
    }

    public function create($lingkunganId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        return view('kepala_keluargas.create', compact('lingkungan'));
    }

    public function store(Request $request, $lingkunganId)
    {
        $request->validate([
            'namakeluarga' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'peleantaon' => 'nullable|numeric|min:0',
        ]);

        KepalaKeluarga::create([
            'lingkungan_id' => $lingkunganId,
            'namakeluarga' => $request->namakeluarga,
            'alamat' => $request->alamat,
            'peleantaon' => $request->peleantaon,
        ]);

        return redirect()->route('kepala_keluargas.index', $lingkunganId)->with('success', 'Kepala Keluarga berhasil ditambahkan.');
    }

    public function edit($lingkunganId, $kepalaKeluargaId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);
        return view('kepala_keluargas.edit', compact('lingkungan', 'kepalaKeluarga'));
    }

    public function update(Request $request, $lingkunganId, $kepalaKeluargaId)
    {
        $request->validate([
            'namakeluarga' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'peleantaon' => 'nullable|numeric|min:0',
        ]);

        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);
        $kepalaKeluarga->update($request->all());

        return redirect()->route('kepala_keluargas.index', $lingkunganId)->with('success', 'Perubahan pada kepala keluarga berhasil disimpan.');
    }

    public function destroy($lingkunganId, $kepalaKeluargaId)
    {
        // Cari kepala keluarga berdasarkan ID
        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);

        // Lakukan proses delete
        $kepalaKeluarga->delete();

        // Redirect atau response sesuai kebutuhan Anda
        return redirect()->route('kepala_keluargas.index', $lingkunganId)->with('success', 'Data kepala keluarga berhasil dihapus.');
    }
    public function kepalaKeluargas($id)
    {
        $kepalakeluarga = Lingkungan::findOrFail($id);
        $anggotakeluaraga = KepalaKeluarga::where('kepalakeluarga_id', $id)->get();
        return view('anggota_keluarga.index', compact('kepalakeluara', 'anggotakeluargas'));
    }
}
