<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PengumumanController extends Controller
{   
    public function index()
    {
        $data = Pengumuman::latest()->paginate(5);
        return view('admin.pengumuman', compact('data'));
    }

    public function tambahpengumuman()
    {
        return view('admin.tambahpengumuman');
    }

    public function insertpengumuman(Request $request)
    {
        $validated= $request->validate([
            'judul' =>'required|unique:pengumumen|max:50',
            'keterangan' =>'max:200',
            'tanggal' =>'required',
            'photo' =>  'required|mimes:jpg,jpeg,png',
        ],
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.max' => ' maksimal 20 karakter',
            'keterangan.max'=> ' Keterangan maksimal 200 karakter',
            'photo.required' => 'Photo Tidak boleh Kosong', 
            'tanggal.required' => 'tanggal Tidak boleh Kosong', 
            'photo.mimes'=> 'Photo tidak dapat digunakan',    
        ]);

        $photo = $request->file('photo');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($photo->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $lokasi = 'image/pengumuman/';
        $image = $lokasi.$img_name;
        $photo->move($lokasi, $img_name);

        Pengumuman::insert([
            'judul' =>  $request->judul,
            'keterangan' => $request->keterangan,
            'photo' => $image,
            'tanggal' => $request->tanggal,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('pengumumanjemaat')->with('success', 'Data berhasil dimasukkan');
    }

    public function tampilkanpengumuman($id)
    {
        $data = Pengumuman::find($id);
        return view('admin.tampilpengumuman', compact('data')); 
    }
    
    public function updatepengumuman(Request $request, $id)
    {
        $validated= $request->validate([
            'judul' =>'required|min:4',
            'keterangan' =>'required|max:255',
        ], 
        [
            'judul.required' =>'Judul tidak boleh kosong',
            'judul.min' => ' maksimal 4 karakter',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'keterangan.max' => 'Keterangan Maksimal 255 karakter',
        ]);

        $photolama = $request->photolama;
        $photo = $request->file('photo');

        if($photo){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $lokasi = 'image/pengumuman/';
            $image = $lokasi.$img_name;
            $photo->move($lokasi, $img_name);
            
            unlink($photolama); 
            Pengumuman::find($id)->update([
                'judul' =>  $request->judul,
                'keterangan' => $request->keterangan,
                'photo' => $image,
                'created_at' => Carbon::now()
            ]);
            
            return redirect()->route('pengumumanjemaat')->with('success', 'Data berhasil diupdate');
        }
        else{
            Pengumuman::find($id)->update([
                'judul' =>  $request->judul,
                'keterangan' => $request->keterangan,
                'created_at' => Carbon::now()
            ]);
            
            return redirect()->route('pengumumanjemaat')->with('success', 'Data berhasil diupdate');      
        }
    }

    public function deletepengumuman($id)
    {
        $photo = Pengumuman::find($id);
        $photolama = $photo->photo;
        unlink($photolama);
        Pengumuman::find($id)->delete();
        return redirect()->route('pengumumanjemaat')->with('success', 'Data berhasil dihapus');
    }
 
      
    public function indexx()
    {
        $data = Pengumuman::latest()->paginate(6);
        return view('user.pengumuman', compact('data'));
    }

    public function pengumumandetails($id)
    {
        $data = Pengumuman::find($id);
        return view('user.pengumumanjemaatdetails', compact('data'));
    }

}
