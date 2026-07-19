@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#FAF6F0] py-8 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="max-w-3xl mx-auto mb-10 text-center">
        <h2 class="text-3xl font-extrabold text-[#5B1963] mt-3">Modul Pelurusan Rambut</h2>
        <p class="text-sm text-gray-500 mt-1">Silakan pilih modul untuk mulai belajar</p>
    </div>


    
    <!-- Grid Container Card Materi -->
    <div class="flex flex-wrap justify-center gap-6 w-full">
        @foreach($materis as $materi)
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
            <a href="{{ route('materi.show', $materi->id) }}" class="flex flex-col justify-between bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:border-[#5B1963] hover:shadow-md transition-all duration-200 group h-full">
                <div class="flex-1">
                    <div class="flex items-start justify-between">
                        <!-- Judul Materi Langsung Tanpa Badge Sub-bab -->
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-[#5B1963] transition-colors leading-snug flex-1 pr-4">
                            {{ $materi->judul }}
                        </h3>
                        
                        <!-- Icon Panah Bulat Kecil -->
                        <div class="bg-[#FAF6F0] p-1.5 rounded-full group-hover:bg-[#5B1963] group-hover:text-white text-[#5B1963] transition-all shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Deskripsi Singkat -->
                    <p class="text-sm text-gray-500 mt-3 leading-relaxed">
                        {{ $materi->deskripsi_singkat }}
                    </p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection