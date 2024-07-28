<?php

namespace App\Http\Controllers;

use App\Models\DataBerita;
use App\Models\DataUlasan;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function home()
    {
        
        $data_beritas = DataBerita::all();
        $ulasans = DataUlasan::all();
        $data_beritas = DataBerita::paginate(5);
        $pemerintahans = DataBerita::where('kategori', 'Pemerintah')->limit(5)->get();
        $hukums = DataBerita::where('kategori', 'Hukum')->limit(5)->get();
        $nasionals = DataBerita::where('kategori', 'Nasional')->limit(5)->get();
        $jawabarats = DataBerita::where('kategori', 'Jawa Barat')->limit(5)->get();
        $data_terkinis = DataBerita::orderBy('tanggal', 'asc')->take(5)->get();
        $pengumumans = DataBerita::where('kategori', 'Pengumuman')->limit(5)->get();
        $slides = DataBerita::orderBy('tanggal', 'desc')->take(5)->get();


        return view('user.portal-berita', compact('data_beritas','ulasans','pengumumans','pemerintahans','hukums','nasionals','jawabarats','data_beritas','data_terkinis','slides'));
    }

    public function show($id_berita)
    {
        $data_beritas = DataBerita::findOrFail($id_berita);
        $jawabarats = DataBerita::where('kategori', 'Jawa Barat')->limit(5)->get();
        $data_terkinis = DataBerita::orderBy('tanggal', 'asc')->take(5)->get();
        $pengumumans = DataBerita::where('kategori', 'Pengumuman')->limit(5)->get();

        return view('user.detailBerita', compact('data_beritas','pengumumans','jawabarats','data_terkinis'));
    }

    public function pemerintah()
    {
        $pemerintahans = DataBerita::where('kategori', 'Pemerintah')->limit(5)->get();

        return view('user.kategori.navPemerintah', compact('pemerintahans'));
    }
   
    public function hukum()
    {
        $hukums = DataBerita::where('kategori', 'Hukum')->limit(5)->get();

        return view('user.kategori.navHukum', compact('hukums'));
    }

    public function nasional()
    {
        $nasionals = DataBerita::where('kategori', 'Nasional')->limit(5)->get();

        return view('user.kategori.navNasional', compact('nasionals'));
    }

    public function jawabarat()
    {
        $jawabarats = DataBerita::where('kategori', 'Jawa Barat')->limit(5)->get();

        return view('user.kategori.navJawabarat', compact('jawabarats'));
    }
}