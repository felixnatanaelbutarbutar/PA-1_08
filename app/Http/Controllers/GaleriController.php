<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\galeri;
use Carbon\Carbon;

class GaleriController extends Controller
{
    public function index(){
        $data = galeri::paginate(100);       
        return view('admin.photo', compact('data'));
    } 

    public function tambahphoto(){
        return view('admin.tambahphoto');
    }

    public function insertphoto(Request $request)
    { 
        $validated = $request->validate([
            'nama' => 'required|max:20',
            'photo' => 'required|mimes:jpg,jpeg,png',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.max' => 'Nama maksimal 20 karakter',
            'photo.required' => 'Photo tidak boleh kosong',     
        ]);

        $photo = $request->file('photo');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($photo->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $lokasi = 'image/photo/';
        $image = $lokasi . $img_name;
        $photo->move($lokasi, $img_name);

        galeri::insert([
            'id_user' => Auth::id(), // Adding id_user field here
            'nama' => $request->nama,
            'photo' => $image,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('photo')->with('success', 'Data berhasil dimasukkan');
    }
    
    public function tampilkanphoto($id){
        $data = galeri::find($id);
        return view('admin.tampilphoto', compact('data')); 
    }

    public function perform()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
 
    public function updatephoto(Request $request, $id){
        $validated = $request->validate([
            'nama' => 'required|max:50',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.max' => 'Nama maksimal 50 karakter',
        ]);

        $photolama = $request->photolama;
        $photo = $request->file('photo');

        if ($photo) {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $lokasi = 'image/photo/';
            $image = $lokasi . $img_name;
            $photo->move($lokasi, $img_name);

            if (file_exists($photolama)) {
                unlink($photolama);
            }

            galeri::find($id)->update([
                'nama' => $request->nama,
                'photo' => $image,
                'updated_at' => Carbon::now()
            ]);

            return redirect()->route('photo')->with('success', 'Data berhasil diperbarui');
        } else {
            galeri::find($id)->update([
                'nama' => $request->nama,
                'updated_at' => Carbon::now()
            ]);

            return redirect()->route('photo')->with('success', 'Data berhasil diperbarui');
        }
    }
    
    public function deletephoto($id){
        $photo = galeri::find($id);
        $photolama = $photo->photo;

        if (file_exists($photolama)) {
            unlink($photolama);
        }

        galeri::find($id)->delete();
        return redirect()->route('photo')->with('success', 'Data berhasil dihapus');
    }

    public function indexx(){
        $data = galeri::latest()->paginate(9);
        return view('user.galeri', compact('data'));
    } 
}
    