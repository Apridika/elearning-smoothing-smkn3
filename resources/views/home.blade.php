@extends('layouts.app')

@section('content')
<!-- Perbaikan Utama: Ditambahkan 'overflow-hidden' agar lingkaran blur tidak membocorkan sisi kanan layar HP -->
<div class="max-w-7xl mx-auto px-6 w-full py-12 md:py-24 overflow-hidden">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        
        <!-- KOLOM KIRI: TEKS & CALL TO ACTION -->
        <div class="space-y-6">
            <div class="inline-flex items-center bg-[#5B1963]/10 text-[#5B1963] px-4 py-1.5 rounded-full text-sm font-semibold tracking-wide">
                <span>Program Keahlian Tata Kecantikan</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-black text-[#5B1963] leading-tight">
                Kuasai Teknik Profesional <br>
                <span class="text-[#FF8A8A] decoration-wavy decoration-2">Pelurusan Rambut</span>
            </h1>
            
            <p class="text-lg text-slate-600 leading-relaxed max-w-lg">
                Platform digital eksklusif untuk siswa SMKN 3 Blitar. Pelajari langkah demi langkah pelurusan rambut modern, video tutorial interaktif, dan kumpulkan tugas dalam satu ruang kelas terintegrasi.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="{{ route('materi.index') }}" class="inline-flex justify-center items-center bg-[#5B1963] text-white px-8 py-4 rounded-2xl font-bold text-lg shadow-lg hover:shadow-xl hover:bg-opacity-90 transition transform hover:-translate-y-0.5">
                    Mulai Belajar
                </a>
                <a href="{{ route('karya.index') }}" class="inline-flex justify-center items-center bg-white border-2 border-[#5B1963]/20 text-[#5B1963] px-8 py-4 rounded-2xl font-bold text-lg hover:bg-slate-50 transition">
                    Lihat Karya Siswa
                </a>
            </div>
        </div>

<!-- KOLOM KANAN: GAMBAR MODUL (RASIO 4:3) -->
<div class="relative">
    <!-- Lingkaran blur dekoratif -->
    <div class="absolute -top-12 -left-12 w-64 h-64 bg-[#FF8A8A]/20 rounded-full blur-3xl -z-10"></div>
    <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-[#5B1963]/10 rounded-full blur-3xl -z-10"></div>
    
    <!-- Bingkai Kartu Gambar -->
    <div class="bg-white p-4 rounded-3xl shadow-xl border border-slate-100 transform rotate-1 hover:rotate-0 transition duration-300">
        <!-- Perbaikan Rasio: Menggunakan aspect-[4/3] agar foto portrait/model rambut terlihat lebih luas vertikal -->
        <div class="relative aspect-[4/3] w-full rounded-2xl overflow-hidden group">
            
            <!-- Foto dari Client/Model Pelurusan Rambut -->
            <img src="{{ asset('images/hero-pelurusan.jpg') }}" 
                alt="Foto Hasil Pelurusan Rambut Tata Kecantikan SMKN 3 Blitar" 
                class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
            
            <!-- Overlay Gradasi Halus & Teks Informasi -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#5B1963]/90 via-[#5B1963]/20 to-transparent flex flex-col justify-end p-6 text-white">
                <h3 class="font-bold text-lg md:text-xl mb-0.5 shadow-sm">Modul Pembelajaran Digital</h3>
                <p class="text-xs opacity-90 shadow-sm">SMKN 3 Blitar - Tata Kecantikan Kulit & Rambut</p>
            </div>

        </div>
    </div>
</div>

    </div>

    <!-- Section Fitur Bawah -->
    <div class="mt-5 max-w-7xl mx-auto py-16">
        <!-- Hero Section -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-[#FF8A8A] bg-[#5B1963]/10 px-4 py-1.5 rounded-full">
                Program Keahlian Tata Kecantikan Kulit dan Rambut
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-[#5B1963] tracking-tight mt-6 leading-tight">
                E-Learning Pelurusan Rambut <br class="hidden md:inline">SMKN 3 Blitar
            </h1>
            <p class="text-slate-600 mt-4 text-base md:text-lg leading-relaxed">
                Platform pembelajaran digital khusus untuk pendalaman teknik Hair Smoothing dan Rebounding secara teoretis, visual, dan interaktif.
            </p>
        </div>

        <!-- Grid Menu Utama / Fitur Aplikasi (Ditambahkan col-1 di HP agar stabil) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Kartu 1: Materi -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="text-[#5B1963] bg-[#5B1963]/5 w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.754 18 18.168 18.477 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Modul Materi</h3>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">
                        Akses materi komprehensif berbasis teks mengenai analisis rambut.
                    </p>
                </div>
                <a href="{{ route('materi.index') }}" class="text-xs font-bold text-[#5B1963] mt-6 inline-flex items-center hover:text-[#FF8A8A] transition">
                    Buka Materi &rarr;
                </a>
            </div>

            <!-- Kartu 2: Video Pembelajaran -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="text-[#5B1963] bg-[#5B1963]/5 w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Video Praktik</h3>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">
                        Galeri video tutorial langkah demi langkah teknik aplikasi kosmetik pelurusan rambut.
                    </p>
                </div>
                <a href="{{ route('video.index') }}" class="text-xs font-bold text-[#5B1963] mt-6 inline-flex items-center hover:text-[#FF8A8A] transition">
                    Tonton Video &rarr;
                </a>
            </div>

            <!-- Kartu 3: Ruang Kelas -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="text-[#5B1963] bg-[#5B1963]/5 w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Ruang Kelas</h3>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">
                        Pantau informasi forum interaktif, tugas mingguan sekolah, dan daftar anggota kelas.
                    </p>
                </div>
                <a href="{{ route('kelas.index') }}" class="text-xs font-bold text-[#5B1963] mt-6 inline-flex items-center hover:text-[#FF8A8A] transition">
                    Masuk Kelas &rarr;
                </a>
            </div>

            <!-- Kartu 4: Karya Siswa -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="text-[#5B1963] bg-[#5B1963]/5 w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Karya Siswa</h3>
                    <p class="text-slate-500 text-xs mt-2 leading-relaxed">
                        Eksplorasi portofolio hasil praktik terbaik siswa yang diunggah langsung ke Instagram.
                    </p>
                </div>
                <a href="{{ route('karya.index') }}" class="text-xs font-bold text-[#5B1963] mt-6 inline-flex items-center hover:text-[#FF8A8A] transition">
                    Lihat Karya &rarr;
                </a>
            </div>
        </div>
    </div>
</div>
@endsection