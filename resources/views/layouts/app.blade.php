<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Pelurusan Rambut - SMKN 3 Blitar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FAF6F0] text-slate-800 flex flex-col min-h-screen font-sans">

    <!-- NAVBAR PREMIUM RESPONSIF -->
    <nav class="bg-[#5B1963] text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo Sekolah / Aplikasi -->
            <div class="flex items-center space-x-3">
                <div class="bg-[#FF8A8A] w-3 h-8 rounded-full shadow-inner"></div>
                <div>
                    <span class="font-extrabold text-xl tracking-wide block">E-Learning</span>
                    <span class="text-xs text-[#FF8A8A] font-medium -mt-1 block">SMKN 3 BLITAR</span>
                </div>
            </div>
            
            <!-- Tombol Hamburger (Hanya muncul di HP/Tablet) -->
            <button id="hamburger-btn" class="md:hidden block text-white focus:outline-none hover:text-[#FF8A8A] transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Menu Desktop (Tersembunyi di HP) -->
            <div class="hidden md:flex items-center space-x-8 font-medium">
                <a href="/" class="{{ request()->is('/') ? 'text-[#FF8A8A] border-b-2 border-[#FF8A8A]' : 'hover:text-[#FF8A8A]' }} transition pb-1">Home</a>
                <a href="{{ route('materi.index') }}" class="{{ request()->routeIs('materi.*') ? 'text-[#FF8A8A] border-b-2 border-[#FF8A8A]' : 'hover:text-[#FF8A8A]' }} transition pb-1">Materi</a>
                <a href="{{ route('video.index') }}" class="{{ request()->routeIs('video.*') ? 'text-[#FF8A8A] border-b-2 border-[#FF8A8A]' : 'hover:text-[#FF8A8A]' }} transition pb-1">Video Pembelajaran</a>
                <a href="{{ route('kelas.index') }}"class="{{ request()->routeIs('kelas.index') ? 'text-[#FF8A8A] border-b-2 border-[#FF8A8A]' : 'hover:text-[#FF8A8A]' }} transition pb-1">Ruang Kelas</a>
                <a href="{{ route('karya.index') }}" class="{{ request()->routeIs('karya.index') ? 'text-[#FF8A8A] border-b-2 border-[#FF8A8A]' : 'hover:text-[#FF8A8A]' }} transition pb-1">Karya Siswa</a>
                <a href="#" class="bg-[#FF8A8A] text-white px-5 py-2 rounded-xl font-bold shadow-md hover:bg-opacity-90 transition">Login</a>
            </div>
            
        </div>

        <!-- Menu Mobile Dropdown (Dengan Animasi) -->
<div id="mobile-menu" class="md:hidden bg-[#4A1250] border-b border-[#5B1963] px-6 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
    <div class="py-4 space-y-3">
        <a href="/" class="block py-2 {{ request()->is('/') ? 'text-[#FF8A8A]' : 'text-white hover:text-[#FF8A8A]' }}">Home</a>
        <a href="{{ route('materi.index') }}" class="block py-2 {{ request()->routeIs('materi.*') ? 'text-[#FF8A8A]' : 'text-white hover:text-[#FF8A8A]' }}">Materi</a>
        <a href="{{ route('video.index') }}" class="block py-2 {{ request()->routeIs('video.*') ? 'text-[#FF8A8A]' : 'text-white hover:text-[#FF8A8A]' }}">Video Pembelajaran</a>
        <a href="{{ route('kelas.index') }}"class="block py-2 {{ request()->routeIs('kelas.index') ? 'text-[#FF8A8A] ' : 'hover:text-[#FF8A8A]' }} transition pb-1">Ruang Kelas</a>
        <a href="{{ route('karya.index') }}" class="block py-2 {{ request()->routeIs('karya.index') ? 'text-[#FF8A8A]' : 'text-white hover:text-[#FF8A8A]' }}">Karya Siswa</a>
        <a href="#" class="block text-center bg-[#FF8A8A] text-white py-2.5 rounded-xl font-bold shadow-md">Login</a>
    </div>
</div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="flex-grow flex items-center">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 text-center py-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-sm font-medium">&copy; 2026 E-Learning Pelurusan Rambut (Smoothing & Keratin) • SMKN 3 Blitar</p>
        </div>
    </footer>

    <!-- SCRIPT LOGIC UNTUK HAMBURGER MENU (DENGAN ANIMASI) -->
<script>
    const btn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        if (menu.classList.contains('max-h-0')) {
            menu.classList.remove('max-h-0');
            menu.classList.add('max-h-96'); // Mengatur tinggi maksimal saat terbuka
        } else {
            menu.classList.remove('max-h-96');
            menu.classList.add('max-h-0');
        }
    });
</script>

</body>
</html>