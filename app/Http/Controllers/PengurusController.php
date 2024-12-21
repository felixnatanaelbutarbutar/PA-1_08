<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;

class PengurusController extends Controller
{
    public function index()
    {
        // Get all pengurus from the database
        $pengurus = Pengurus::all();

        // Pass the pengurus data to the index view
        return view('pengurus.index', compact('pengurus'));
    }

    public function create()
    {
        return view('pengurus.create');
    }

    public function store(Request $request)
    {
        // Retrieve the authenticated user's ID
        $id_user = auth()->user()->id_user ?? null;

        if (!$id_user) {
            return redirect()->route('pengurus.create')->with('error', 'User is not authenticated.');
        }

        // Validate the request
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|nullable|max:1999'
        ]);

        // Handle the file upload
        $fileNameToStore = 'noimage.jpg';
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fileNameWithExt = $foto->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $foto->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            
            // Menyimpan file
            $path = $foto->move(public_path('image/foto_pengurus'), $fileNameToStore);
            
            // Debugging
    
        }

        // Create a new Pengurus instance
        $pengurus = new Pengurus;
        $pengurus->nama = $request->input('nama');
        $pengurus->jabatan = $request->input('jabatan');
        $pengurus->foto = $fileNameToStore;
        $pengurus->id_user = $id_user; // Assign the authenticated user's ID
        $pengurus->save(); // Save the instance to the database

        // Redirect to the index page with a success message
        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil dibuat.');
    }


    public function edit($id)
    {
        $pengurus = Pengurus::find($id);
        if (!$pengurus) {
            abort(404);
        }
        return view('pengurus.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
{
    $pengurus = Pengurus::find($id);

    if (!$pengurus) {
        abort(404);
    }

    // Validasi input
    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'foto' => 'image|nullable|max:1999'
    ]);

    // Jika ada file yang diunggah
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fileNameWithExt = $foto->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $foto->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $foto->storeAs('public/image/foto_pengurus', $fileNameToStore);

        // Hapus foto lama jika ada
        if ($pengurus->foto != 'noimage.jpg') {
            \Storage::delete('public/image/foto_pengurus/' . $pengurus->foto);
        }

        $pengurus->foto = $fileNameToStore;
    }

    // Update data pengurus
    $pengurus->nama = $request->input('nama');
    $pengurus->jabatan = $request->input('jabatan');
    $pengurus->save();

    return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diupdate.');
}


    public function destroy($id)
    {
        $pengurus = Pengurus::find($id);
        if (!$pengurus) {
            abort(404);
        }
        $pengurus->delete();
        return redirect()->route('pengurus.index')->with('success', 'Data berhasil dihapus.');
    }

    public function show()
    {
        $pengurus = Pengurus::all();
        return view('user.pengurus', compact('pengurus'));
    }
}
