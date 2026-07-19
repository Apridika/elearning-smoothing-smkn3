<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'judul' => 'VIDEO PEMBELAJARAN ; PENGERITINGAN DAN PELURUSAN RAMBUT _JURUSAN TATA KECANTIKAN KULIT DAN RAMBUT',
            'youtube_id' => 'd2hkL9SO9CI', // Ganti dengan ID video YouTube asli nanti
            'deskripsi' => 'Cara Meluruskan rambut oleh Jurusan Tata Kecantikan Kulit dan Rambut',
        ]);

        Video::create([
            'judul' => 'Tutorial Rebonding / Cara Meluruskan Rambut',
            'youtube_id' => 'UcwCi5ITvWw', // Ganti dengan ID video YouTube asli nanti
            'deskripsi' => 'Tutorial Rebonding / Cara Meluruskan Rambut',
        ]);

        Video::create([
            'judul' => 'Smoothing paling gampang 99% anti gagal',
            'youtube_id' => 'YQ4kHcfO2To', // Ganti dengan ID video YouTube asli nanti
            'deskripsi' => 'Smoothing paling gampang 99% anti gagal cocok untuk newbie atau yang baru belajar smoothing, simak vidio nya untuk menambah pengetahuan.',
        ]);

        Video::create([
            'judul' => 'Tutorial Smoothing Lengkap, Step By Step Smoothing Rambut Panjang Untuk Pemula',
            'youtube_id' => 'p6YVB0rmABo', // Ganti dengan ID video YouTube asli nanti
            'deskripsi' => 'Video Tutorial Smoothing Rambut Lengkap, Step by Step, Detail & Sangat Mudah di Cerna. Semoga Bermanfaat.',
        ]);
    }
}
