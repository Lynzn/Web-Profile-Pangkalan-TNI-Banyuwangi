<?php

namespace Database\Seeders;
use App\Models\pendaftaran;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendaftaran = [
            [
            'id'             => 3,
            'judul_pendaftaran'   => 'Judul pendaftaran',
            'slug_pendaftaran'    => 'Judul-pendaftaran',
            'isi'           => '<p>Isi pendaftaran</p>',
            'publish'         => '2021-06-03',
            'gambar'        => 'assets/images/pendaftaran/',
            'created_at'            => '2021-06-03 15:46:18',
            'updated_at'            => '2021-06-03 15:46:18'
        ],
        [
            'id'             => 2,
            'judul_pendaftaran'   => 'Judul pendaftaran 2',
            'slug_pendaftaran'    => 'Judul-pendaftaran-2',
            'isi'           => '<p>Isi pendaftaran</p>',
            'publish'         => '2021-06-03',
            'gambar'        => 'assets/images/pendaftaran/',
            'created_at'            => '2021-06-03 15:46:18',
            'updated_at'            => '2021-06-03 15:46:18'
        ]
    ];

        pendaftaran::insert($pendaftaran);
    }
}