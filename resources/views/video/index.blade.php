@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 w-full py-12">
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-3xl font-bold text-[#5B1963]">Video Pembelajaran</h1>
        <p class="text-slate-600 mt-2">Daftar tutorial visual praktik pelurusan rambut dan keratin treatment.</p>
    </div>

    <!-- Grid Video Dinamis dari Database -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($videos as $video)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
            <div>
                <!-- Gambar Mini / Thumbnail Otomatis Menggunakan ID YouTube -->
                <div class="aspect-video bg-slate-900 relative">
                    <img src="https://img.youtube.com/vi/{{ $video->youtube_id }}/mqdefault.jpg" alt="{{ $video->judul }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                        <div class="bg-white/90 text-[#5B1963] p-3 rounded-full shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <h3 class="text-lg font-bold text-slate-800 line-clamp-2 leading-snug">{{ $video->judul }}</h3>
                    <p class="text-slate-600 text-xs mt-2 line-clamp-2">{{ $video->deskripsi }}</p>
                </div>
            </div>
            <div class="p-6 pt-0">
                <a href="{{ route('video.show', $video->id) }}" class="block text-center bg-[#5B1963] text-white py-2.5 rounded-xl font-bold text-xs hover:bg-opacity-90 transition">
                    Tonton Video
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection