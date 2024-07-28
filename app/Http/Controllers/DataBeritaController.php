<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\DataBerita;
class DataBeritaController extends Controller
{
    public function dataBerita()
    {
        $data_beritas =  DataBerita::paginate(5);
        return view('admin.dataBerita.dataBeritaView', compact('data_beritas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.dataBerita.dataBeritaAdd', ['kategoris' => $kategoris]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_berita' => 'required',
            'judul_berita' => 'required|max:255',
            'kategori' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'reporter' => 'required',
            'editor' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // php artisan storage:link 
        if ($request->hasFile('gambar')) {
            $gambarName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('storage/uploads/dataBerita'), $gambarName);
        } else {
            $gambarName = null;
        }

        DataBerita::create([
            'id_berita' => $validatedData['id_berita'],
            'judul_berita' => $validatedData['judul_berita'],
            'kategori' => $validatedData['kategori'],
            'isi' => $validatedData['isi'],
            'tanggal' => $validatedData['tanggal'],
            'reporter' => $validatedData['reporter'],
            'editor' => $validatedData['editor'],
            'gambar' => $gambarName,
        ]);

        return redirect()->route('data-berita.dataBerita')->with('success', 'Data berhasil ditambah');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $kategoris = Kategori::all();
        $data_beritas = DataBerita::findOrFail($id);
        return view('admin.dataBerita.dataBeritaUpdate',['kategoris' => $kategoris], ['data_beritas' => $data_beritas]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id_berita' => 'required',
            'judul_berita' => 'required|max:255',
            'kategori' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'reporter' => 'required',
            'editor' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
         $data_beritas = DataBerita::findOrFail($id);
    
        if ($request->hasFile('gambar')) {
            $gambarName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('storage/uploads/dataBerita'), $gambarName);
            // hapus gambar lama jika ada
            if ( $data_beritas->gambar && file_exists(public_path('storage/uploads/dataBerita/' .  $data_beritas->gambar))) {
                unlink(public_path('storage/uploads/dataBerita/' .  $data_beritas->gambar));
            }
             $data_beritas->gambar = $gambarName;
        }
            $data_beritas->id_berita = $validatedData['id_berita'];
            $data_beritas->judul_berita = $validatedData['judul_berita'];
            $data_beritas->kategori = $validatedData['kategori'];
            $data_beritas->isi = $validatedData['isi'];
            $data_beritas->tanggal = $validatedData['tanggal'];
            $data_beritas->reporter = $validatedData['reporter'];
            $data_beritas->editor = $validatedData['editor'];
            $data_beritas->save();
        
            return redirect()->route('data-berita.dataBerita')->with('success', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $data_beritas = DataBerita::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ( $data_beritas->gambar) {
            $gambarPath = public_path('storage/uploads/dataBerita'. $data_beritas->gambar);
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }

        // Hapus data berita dari database
         $data_beritas->delete();

        return redirect()->route('data-berita.dataBerita')->with('success', 'Berita berhasil dihapus!');
    }
}
