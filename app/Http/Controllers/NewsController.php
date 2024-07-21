<?php

namespace App\Http\Controllers;

use App\Models\DataBerita;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        
        $data_beritas = DataBerita::all();
        $data_beritas = DataBerita::paginate(5);
        $pengumumans = DataBerita::where('kategori', 'Pengumuman')->limit(5)->get();
        $data_terkinis = DataBerita::orderBy('tanggal', 'asc')->take(5)->get();
        $slides = DataBerita::orderBy('tanggal', 'desc')->take(5)->get();
        return view('user.portal-berita', compact('data_beritas','pengumumans' ,'data_beritas','data_terkinis', 'slides'));
    }
  
}