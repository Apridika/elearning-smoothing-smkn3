@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FAF6F0] pb-12 flex flex-col items-center w-full">
    
    <!-- Top Bar Navigation -->
    <div class="sticky top-0 bg-white border-b border-gray-100 shadow-sm z-10 w-full flex justify-center">
        <div class="w-full max-w-3xl px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <a href="{{ route('materi.index') }}" class="text-[#5B1963] p-1 rounded-lg hover:bg-[#FAF6F0] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <div class="ml-3">
                    <h1 class="text-sm font-bold text-gray-800 line-clamp-1">{{ $materi->judul }}</h1>
                </div>
            </div>
            
            <!-- Indikator Lembaran Halaman Aktif -->
            @if($totalPage > 1)
                <span class="text-xs font-semibold bg-[#FAF6F0] text-[#5B1963] px-3 py-1 rounded-full">
                    Hal {{ $currentPage }} dari {{ $totalPage }}
                </span>
            @endif
        </div>
    </div>

    <!-- Artikel Konten Utama -->
    <div class="w-full max-w-3xl px-4 mt-6">
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
            <h2 class="text-2xl font-extrabold text-[#5B1963] mb-4 leading-tight">
                {{ $materi->judul }}
            </h2>
            
            <hr class="border-gray-100 mb-6">

            <!-- Render Konten Khusus Lembaran Halaman Ini -->
            <div class="text-base text-gray-700 leading-relaxed space-y-4">
                {!! $konten_halaman_ini !!}
            </div>
        </div>

        <!-- Tombol Pindah Lembaran Halaman (Hanya muncul jika materi punya lebih dari 1 halaman) -->
        @if($totalPage > 1)
            <div class="mt-6 grid grid-cols-2 gap-4">
                
                <!-- Lembar Sebelumnya -->
                @if($currentPage > 1)
                    <a href="{{ route('materi.show', ['id' => $materi->id, 'page' => $currentPage - 1]) }}" class="flex items-center justify-center bg-white border border-gray-200 text-[#5B1963] font-bold py-3.5 px-4 rounded-2xl shadow-sm hover:bg-gray-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                        </svg>
                        Lembar Sebelumnya
                    </a>
                @else
                    <a href="{{ route('materi.index') }}" class="flex items-center justify-center bg-white border border-gray-200 text-gray-400 font-bold py-3.5 px-4 rounded-2xl opacity-60">
                        Kembali ke Menu
                    </a>
                @endif

                <!-- Lembar Berikutnya -->
                @if($currentPage < $totalPage)
                    <a href="{{ route('materi.show', ['id' => $materi->id, 'page' => $currentPage + 1]) }}" class="flex items-center justify-center bg-[#5B1963] text-white font-bold py-3.5 px-4 rounded-2xl shadow-lg shadow-purple-900/10 hover:bg-[#4a1450] transition">
                        Lembar Berikutnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <a href="{{ route('materi.index') }}" class="flex items-center justify-center bg-[#5B1963] text-white font-bold py-3.5 px-4 rounded-2xl shadow-lg hover:bg-opacity-90 transition">
                        Selesai Membaca
                    </a>
                @endif

            </div>
        @else
            <!-- Jika cuma 1 lembar, tampilkan tombol selesai biasa -->
            <div class="mt-6">
                <a href="{{ route('materi.index') }}" class="block w-full text-center bg-[#5B1963] text-white font-bold py-3.5 rounded-2xl shadow-md hover:bg-[#4a1450] transition">
                    Kembali ke Menu Utama
                </a>
            </div>
        @endif
    </div>
</div>
@endsection