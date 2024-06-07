<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datajemaat;


class DatajemaatController extends Controller
{
    public function index(){
        $data = datajemaat::paginate();
        return view('admin.datajemaat', compact('data'));
    }
    public function tambahjemaat(){ 
        return view('admin.tambahjemaat');
    }
    public function insertdata(Request $request){ 

        $validated=$request->validate([
            'notelpon' => 'required|max:13',
        ],
        [
            'notelpon.max' => 'Nomor maximal 13 angka',
        ]);
        //dd($request->all());
        datajemaat::create($request->all());
        return redirect()->route('datajemaat')->with('success','Data Berhasil ditambahkan'); 
    }
    public function tampilkandata($id){
        $data = datajemaat::find($id);
        //dd($data);
        return view('admin.tampildata', compact('data'));
    }
    public function updatedata(Request $request,$id){
        $validated=$request->validate([
            'notelpon' => 'required|max:13',
        ],
        [
            'notelpon.max' => 'Nomor maximal 13 angka',
        ]);
        $data = datajemaat::find($id);
        $data ->update($request->all());
        return redirect()->route('datajemaat')->with('success','Data Berhasil diupdate'); 
    }
    public function deletedata($id){
        $data = datajemaat::find($id);
        $data ->delete();
        return redirect()->route('datajemaat')->with('success','Data Berhasil dihapus'); 
    }
    public function indexx(){
        $data = datajemaat::all();
        return view('user.datajemaat', compact('data'));
    }
}