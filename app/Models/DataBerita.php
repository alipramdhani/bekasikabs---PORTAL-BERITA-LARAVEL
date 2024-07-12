<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBerita extends Model
{
    use HasFactory;
    protected $table = 'data_beritas';
    protected $primaryKey = 'id_berita';
    protected $fillable = [
        'id_berita',
        'kategori', 
        'gambar', 
        'judul_berita', 
        'isi',
        'tanggal', 
        'reporter', 
        'editor'
    ];
}
