<?php

namespace App\Http\Controllers;

use App\Models\DataUlasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function dataUlasan()
    {
        $ulasans =  DataUlasan::paginate(5);
        return view('admin.dataUlasan.UlasanView', compact('ulasans'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|max:25',
            'ulasan' => 'required',
        ]);
        
        DataUlasan::create([
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'email' => $validatedData['email'],
            'ulasan' => $validatedData['ulasan'], 
        ]);

        return redirect()->route('home.index')->with('success', 'Data berhasil ditambah');
    }
    public function destroy(string $id)
    {
         $ulasans = DataUlasan::findOrFail($id);
         $ulasans->delete();

        return redirect()->route('data-ulasan.dataUlasan')->with('success', 'Berita berhasil dihapus!');
    }
}
