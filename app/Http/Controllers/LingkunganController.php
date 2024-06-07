<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepalaKeluarga;
use App\Models\Lingkungan;

class LingkunganController extends Controller
{
    public function index()
    {
        $lingkungans = Lingkungan::withCount('kepalaKeluargas')->get();
        return view('lingkungans.index', compact('lingkungans'));
    }

    public function show($id)
    {
        $lingkungan = Lingkungan::findOrFail($id);
        return view('lingkungans.show', compact('lingkungan'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $lingkungans = Lingkungan::where('nama', 'like', '%' . $keyword . '%')->get();
        return view('lingkungan.index', compact('lingkungans'));
    }

    public function kepalaKeluargas($id)
    {
        $lingkungan = Lingkungan::findOrFail($id);
        $kepalaKeluargas = KepalaKeluarga::where('lingkungan_id', $id)->get();
        return view('kepala_keluargas.index', compact('lingkungan', 'kepalaKeluargas'));
    }

}
