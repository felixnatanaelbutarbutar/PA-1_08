<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index(){
        $pengeluaran = keuangan::sum('pemasukan');
        $pemasukan = keuangan::sum('pengeluaran');
        $saldo = $pengeluaran - $pemasukan;
        $data = keuangan::all();
        return view('admin.keuangan',compact('data','saldo','pemasukan','pengeluaran' ));
    }
    public function tambahkeuangan(){
        return view('admin.tambahkeuangan');
    }
    public function insertkeuangan(Request $request){
        Keuangan::create($request->all());
       return redirect()->route('keuangan')->with('success','Data berhasil di tambahkan');
    }
    public function tampilkankeuangan($id){
        $data =keuangan::find($id);
        return view('admin.tampilkeuangan',compact('data'));
    }
    public function updatekeuangan(Request $request, $id){
        $data =keuangan::find($id);
        $data->update($request->all());
        return redirect()->route('keuangan')->with('success','Data berhasil di update');
    }
    public function deletekeuangan(Request $request, $id){
        $data =keuangan::find($id);
        $data->delete();
        return redirect()->route('keuangan')->with('success','Data berhasil di Hapus');
    }
    
    public function indexx(){
        $pengeluaran = keuangan::sum('pemasukan');
        $pemasukan = keuangan::sum('pengeluaran');
        $saldo = $pengeluaran - $pemasukan;
        $data = keuangan::all();
        return view('user.keuangan',compact('data','saldo','pemasukan','pengeluaran'));
    }

}
