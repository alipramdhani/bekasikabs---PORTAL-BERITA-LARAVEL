<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    public function index()
    {
        $kategoris =  Kategori::all();
        return view('user.portal-berita', compact('kategoris'));
    }
    public function kategori()
    {
         $kategoris =  Kategori::paginate(5);
        return view('admin.kategori.kategoriView', compact('kategoris'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.kategoriAdd');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kategori' => 'required',
            'nama_kategori' => 'required|max:255',
        ]);
        Kategori::create([
            'id_kategori' => $validatedData['id_kategori'],
            'nama_kategori' => $validatedData['nama_kategori'],
        ]);

        return redirect()->route('data-kategori.kategori')->with('success', 'Data berhasil ditambah');
    }
    
    
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $validatedData = $request->validate([
    //         'id_kategori' => 'required',
    //         'nama_kategori' => 'required|max:255',
    //     ]);
    
    //      $kategoris = Kategori::findOrFail($id);
    //      $kategoris->id_kategori = $validatedData['id_kategori'];
    //      $kategoris->nama_kategori = $validatedData['nama_kategori'];
    //      $kategoris->save();
    
    //     return redirect()->route('data-kategori.kategori')->with('success', 'Data berhasil diubah');
    // }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $kategoris = Kategori::findOrFail($id);
         $kategoris->delete();

        return redirect()->route('data-kategori.kategori')->with('success', 'Berita berhasil dihapus!');
    }
}
