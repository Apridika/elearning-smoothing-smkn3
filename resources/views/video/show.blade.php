@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 w-full py-12">
    
    <!-- Tombol Kembali Berdesain Modern -->
    <a href="{{ route('video.index') }}" class="inline-flex items-center bg-white border border-slate-200 text-[#5B1963] px-4 py-2.5 rounded-xl font-bold text-sm shadow-sm hover:bg-slate-50 hover:border-slate-300 transition mb-6 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 transform group-hover:-translate-x-1 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Video Pembelajaran
    </a>

    <!-- Bingkai Pemutar Video YouTube (Responsif 16:9) -->
    <div class="w-full aspect-video bg-black rounded-3xl overflow-hidden shadow-md border border-slate-100">
        <iframe 
            class="w-full h-full" 
            src="https://www.youtube.com/embed/{{ $video->youtube_id }}?rel=0" 
            title="{{ $video->judul }}" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>

    <!-- Informasi Detail Video -->
    <div class="mt-8 bg-white p-6 md:p-8 rounded-3xl shadow-sm border border-slate-100">
        <span class="text-xs font-bold text-[#FF8A8A] uppercase tracking-wider block mb-2">Modul Praktik Visual</span>
        <h1 class="text-2xl font-bold text-slate-800 leading-snug">{{ $video->judul }}</h1>
        <div class="w-12 h-1 bg-[#5B1963] rounded-full my-4"></div>
        <p class="text-slate-600 text-sm leading-relaxed whitespace-pre-line">{{ $video->deskripsi }}</p>
    </div>

</div>
@endsection