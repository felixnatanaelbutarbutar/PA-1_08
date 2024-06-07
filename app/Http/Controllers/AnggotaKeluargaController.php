<?php
namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use App\Models\KepalaKeluarga;
use App\Models\Lingkungan;
use Illuminate\Http\Request;

class AnggotaKeluargaController extends Controller
{
    public function showAnggotaKeluarga($lingkunganId, $kepalaKeluargaId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);
        $anggotaKeluargas = AnggotaKeluarga::where('kepala_keluarga_id', $kepalaKeluargaId)->paginate(10);

        return view('anggota_keluargas.index', compact('lingkungan', 'kepalaKeluarga', 'anggotaKeluargas'));
    }
    public function create($lingkunganId, $kepalaKeluargaId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);
        return view('anggota_keluargas.create', compact('lingkungan', 'kepalaKeluarga'));
    }

    public function store(Request $request, $lingkunganId, $kepalaKeluargaId)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggallahir' => 'required|date',
            'tempatlahir' => 'required|string|max:255',
            'baptis' => 'nullable|in:Sudah Baptis,Belum Baptis',
            'sidi' => 'nullable|in:Sudah Sidi,Belum Sidi',
            'alamat' => 'required|string|max:255',
            'notelpon' => 'required|numeric',
        ]);

        AnggotaKeluarga::create([
            'kepala_keluarga_id' => $kepalaKeluargaId,
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'tanggallahir' => $request->tanggallahir,
            'tempatlahir' => $request->tempatlahir,
            'baptis' => $request->baptis ?? 'Belum Baptis',
            'sidi' => $request->sidi ?? 'Belum Sidi',
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
        ]);

        return redirect()->route('anggota_keluargas.index', [$lingkunganId, $kepalaKeluargaId])->with('success', 'Anggota Keluarga berhasil ditambahkan.');
    }

    public function edit($lingkunganId, $kepalaKeluargaId, $anggotaKeluargaId)
    {
        $lingkungan = Lingkungan::findOrFail($lingkunganId);
        $kepalaKeluarga = KepalaKeluarga::findOrFail($kepalaKeluargaId);
        $anggotaKeluarga = AnggotaKeluarga::findOrFail($anggotaKeluargaId);
        return view('anggota_keluargas.edit', compact('lingkungan', 'kepalaKeluarga', 'anggotaKeluarga'));
    }

    public function update(Request $request, $lingkunganId, $kepalaKeluargaId, $anggotaKeluargaId)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggallahir' => 'required|date',
            'tempatlahir' => 'required|string|max:255',
            'baptis' => 'nullable|in:Sudah Baptis,Belum Baptis',
            'sidi' => 'nullable|in:Sudah Sidi,Belum Sidi',
            'alamat' => 'required|string|max:255',
            'notelpon' => 'required|numeric',
        ]);

        $anggotaKeluarga = AnggotaKeluarga::findOrFail($anggotaKeluargaId);
        $anggotaKeluarga->update([
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'tanggallahir' => $request->tanggallahir,
            'tempatlahir' => $request->tempatlahir,
            'baptis' => $request->baptis ?? 'Belum Baptis',
            'sidi' => $request->sidi ?? 'Belum Sidi',
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
        ]);

        return redirect()->route('anggota_keluargas.index', [$lingkunganId, $kepalaKeluargaId])->with('success', 'Perubahan pada anggota keluarga berhasil disimpan.');
    }

    public function destroy($lingkunganId, $kepalaKeluargaId, $anggotaKeluargaId)
    {
        $anggotaKeluarga = AnggotaKeluarga::findOrFail($anggotaKeluargaId);
        $anggotaKeluarga->delete();

        return redirect()->route('anggota_keluargas.index', [$lingkunganId, $kepalaKeluargaId])->with('success', 'Data anggota keluarga berhasil dihapus.');
    }
}
