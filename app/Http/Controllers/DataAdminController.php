<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\DataAdmin;
class DataAdminController extends Controller
{
    public function dataAdmin()
    {
        $data_admins =  DataAdmin::paginate(5);
        return view('admin.dataAdmin.dataAdminView', compact('data_admins'));
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.dataAdmin.dataAdminAdd');
    // }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|max:25',
            'email' => 'required|max:25',
            'password' => 'required|max:25',
        ]);
        
        DataAdmin::create([
            'nama' => $validatedData['nama'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Hashing the password
        ]);

        return redirect()->route('data-admin.dataAdmin')->with('success', 'Data berhasil ditambah');
    }
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Request $request, string $id)
    // {
    //     $data_admins = DataAdmin::findOrFail($id);
    //     return view('admin.dataAdmin.dataAdminUpdate', compact('data_admins'));
    // }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
    
        $data_admins = DataAdmin::findOrFail($id);
        $data_admins->nama = $validatedData['nama'];
        $data_admins->username = $validatedData['username'];
        $data_admins->email = $validatedData['email'];
        $data_admins->password = Hash::make($validatedData['password']);
        $data_admins->save();
    
        return redirect()->route('data-admin.dataAdmin')->with('success', 'Berita berhasil diperbarui!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_admins = DataAdmin::findOrFail($id);
        // Hapus data berita dari database
        $data_admins->delete();

        return redirect()->route('data-admin.dataAdmin')->with('success', 'Berita berhasil dihapus!');
    }
}
