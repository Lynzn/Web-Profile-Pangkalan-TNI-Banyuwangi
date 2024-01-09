<?php

namespace Database\Seeders;

use App\Models\Berita_Model;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = [[
            'id'             => 1,
            'judul_berita'   => 'Judul berita',
            'slug_berita'    => 'Judul_berita',
            'isi'           => '<p>Isi berita</p>',
            'publish'         => '2021-06-03',
            'gambar'        => 'assets/images/berita/',
            'created_at'            => '2021-06-03 15:46:18',
            'updated_at'            => '2021-06-03 15:46:18'
        ]];

        Berita_Model::insert($berita);
    }
}
