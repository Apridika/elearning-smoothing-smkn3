@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 w-full py-12">
    
    <!-- Judul Halaman -->
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-3xl font-bold text-[#5B1963]">Laporan Karya Siswa</h1>
        <p class="text-slate-600 mt-2">Dokumentasi portofolio dan artikel hasil praktik terbaik pelurusan rambut siswa SMKN 3 Blitar.</p>
    </div>

    <!-- Grid Galeri Tautan Instagram Karya Siswa -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Kartu Link Instagram 1 -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between">
        <div class="p-6">
            <!-- Header Identitas Siswa -->
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-slate-200 text-[#5B1963] w-9 h-9 rounded-full flex items-center justify-center font-bold text-xs">
                    SN
                </div>
                <div>
                    <h4 class="font-bold text-sm text-slate-800">Siti Nurhaliza</h4>
                    <span class="text-[11px] text-slate-400 block">Kelas XI Kecantikan 1</span>
                </div>
            </div>
            
            <span class="text-[10px] bg-[#FF8A8A]/10 text-[#5B1963] px-2.5 py-1 rounded-full font-bold uppercase tracking-wider inline-block mb-3">
                Smoothing Rambut Virgin
            </span>
            
            <h3 class="font-bold text-base text-slate-800 leading-snug">
                Hasil Praktik Kerja Pelurusan Rambut Tekstur Tebal & Kuat
            </h3>
            
            <p class="text-slate-600 text-xs mt-2 line-clamp-2">
                Proses restorasi ikatan disulfida menggunakan teknik step-by-step yang aman untuk menghindari over-process.
            </p>
        </div>
        
        <!-- Tombol Tautan ke Instagram Luar -->
        <div class="p-6 pt-0">
            <!-- Ganti href dengan URL postingan IG siswa yang bersangkutan -->
            <a href="https://instagram.com/username_siswa_disini" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center bg-[#5B1963] text-white py-2.5 rounded-xl font-bold text-xs hover:bg-opacity-90 transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                Lihat Dokumentasi di Instagram
            </a>
        </div>
    </div>

    <!-- Kartu Link Instagram 2 -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-slate-200 text-[#5B1963] w-9 h-9 rounded-full flex items-center justify-center font-bold text-xs">
                    AD
                </div>
                <div>
                    <h4 class="font-bold text-sm text-slate-800">Ahmad Dhani</h4>
                    <span class="text-[11px] text-slate-400 block">Kelas XI Kecantikan 2</span>
                </div>
            </div>
            
            <span class="text-[10px] bg-[#FF8A8A]/10 text-[#5B1963] px-2.5 py-1 rounded-full font-bold uppercase tracking-wider inline-block mb-3">
                Keratin Treatment
            </span>
            
            <h3 class="font-bold text-base text-slate-800 leading-snug">
                Restorasi Rambut Rusak Bleaching Menggunakan Formulasi Asam Amino
            </h3>
            
            <p class="text-slate-600 text-xs mt-2 line-clamp-2">
                Studi kasus penutupan kutikula rambut yang rapuh pasca pewarnaan ekstrem salon sekolah.
            </p>
        </div>
        
        <div class="p-6 pt-0">
            <a href="https://instagram.com/username_siswa_disini" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center bg-[#5B1963] text-white py-2.5 rounded-xl font-bold text-xs hover:bg-opacity-90 transition group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                Lihat Dokumentasi di Instagram
            </a>
        </div>
    </div>

</div>
</div>
@endsection