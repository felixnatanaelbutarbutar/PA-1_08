<?php
namespace App\Http\Controllers;

use App\Models\Lingkungan;
use App\Models\KepalaKeluarga;
use App\Models\AnggotaKeluarga;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function lingkungan()
    {
        // $lingkungans = Lingkungan::all();
        $lingkungans = Lingkungan::withCount('kepalaKeluargas')->get();
        return view('user.lingkungan', compact('lingkungans'));
    }

    public function kepalaKeluarga($id)
    {
        $lingkungan = Lingkungan::findOrFail($id);
        $kepalaKeluargas = KepalaKeluarga::where('lingkungan_id', $id)->get();
        return view('user.kepalaKeluarga', compact('lingkungan', 'kepalaKeluargas'));
    }

    public function anggotaKeluarga($id)
    {
        $kepalaKeluarga = KepalaKeluarga::findOrFail($id);
        $anggotaKeluargas = AnggotaKeluarga::where('kepala_keluarga_id', $id)->get();
        return view('user.anggotaKeluarga', compact('kepalaKeluarga', 'anggotaKeluargas'));
    }
}
