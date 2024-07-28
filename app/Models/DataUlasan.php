<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUlasan extends Model
{
    use HasFactory;
    protected $table = 'ulasan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_lengkap',
        'email',
        'ulasan',
    ];
}
