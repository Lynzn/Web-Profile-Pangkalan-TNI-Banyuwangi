<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_Model extends Model
{
    use HasFactory;
    protected $fillable = ['judul_berita', 'slug_berita', 'isi', 'publish', 'gambar', 'link_ig'];

    protected $table = 'berita';
}
