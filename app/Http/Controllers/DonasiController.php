<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donasi;

class DonasiController extends Controller
{
    public function index(Request $request)
    {
        $data = donasi::all();
        return view('admin.donasi', compact('data'));
    }

    public function tambahdonasi(Request $request)
    {
        return view('admin.tambahdonasi');
    }
    public function insertdonasi(Request $request)
    {
        // Mendapatkan id pengguna yang saat ini masuk
        $id_user = auth()->id();

        // Menyisipkan nilai id_user ke dalam request data
        $requestData = $request->all();
        $requestData['id_user'] = $id_user;

        // Menyimpan data ke dalam tabel jadwalibadahs
        donasi::create($requestData);
        return redirect()->route('donasi')->with('success', 'Data Berhasil ditambahkan');
    }

    public function tampilkandonasi($id)
    {
        $data = donasi::find($id);
        return view('admin.tampildonasi', compact('data'));
    }
    public function updatedonasi(Request $request, $id)
    {
        $data = donasi::find($id);
        $data->update($request->all());
        return redirect()->route('donasi')->with('success', 'Data Berhasil diupdate');
    }
    public function deletedonasi($id)
    {
        $data = donasi::find($id);
        $data->delete();
        return redirect()->route('donasi')->with('success', 'Data Berhasil dihapus');
    }
    public function indexx(Request $request)
    {
        $data = donasi::all();
        return view('user.donasi', compact('data'));
    }

}
