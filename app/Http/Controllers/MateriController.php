<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    // 1. Menampilkan Halaman Katalog Materi (Modul/Bacaan)
    public function index()
    {
        $materis = \App\Models\Materi::all();
        return view('materi.index', compact('materis'));
    }

    // 2. Menampilkan Halaman Detail Materi
    public function show(Request $request, $id)
    {
    $materi = Materi::findOrFail($id);

    // Pecah teks berdasarkan penanda halaman khusus
    // Jika tidak ada penanda, teks akan dianggap hanya memiliki 1 halaman
    $halaman_array = explode('<hr class="page-break">', $materi->konten_bacaan);
    
    // Ambil halaman aktif saat ini dari URL (default halaman 1)
    $currentPage = (int) $request->query('page', 1);
    $totalPage = count($halaman_array);

    // Pastikan halaman aktif tidak keluar dari batas
    if ($currentPage < 1) $currentPage = 1;
    if ($currentPage > $totalPage) $currentPage = $totalPage;

    // Ambil isi teks khusus untuk halaman yang sedang aktif
    $konten_halaman_ini = $halaman_array[$currentPage - 1];

    return view('materi.show', compact(
        'materi', 
        'konten_halaman_ini', 
        'currentPage', 
        'totalPage'
    )); 
}
}