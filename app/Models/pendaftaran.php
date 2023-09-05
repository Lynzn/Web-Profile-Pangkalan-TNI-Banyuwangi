<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = ['judul_pendaftaran', 'slug_pendaftaran', 'isi', 'publish', 'gambar'];

    protected $table = 'pendaftaran';
}
