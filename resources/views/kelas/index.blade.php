@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 w-full py-8">
    
    <!-- BANNER KELAS (Ala Google Classroom) -->
    <div class="bg-gradient-to-r from-[#5B1963] to-[#4A1250] text-white p-8 rounded-3xl shadow-md relative overflow-hidden mb-8">
        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-[#FF8A8A]/10 rounded-full blur-2xl"></div>
        <span class="text-xs font-bold uppercase tracking-widest text-[#FF8A8A]">Kelas XI Kecantikan</span>
        <h1 class="text-3xl font-black mt-1">Praktik Pelurusan Rambut 2026</h1>
        <p class="text-sm opacity-80 mt-2">SMKN 3 Blitar • Kompatibilitas Smoothing & Keratin</p>
    </div>

    <!-- SISTEM TAB NAVIGASI -->
    <div class="border-b border-slate-200 mb-6 flex space-x-8 text-sm font-bold">
        <button onclick="switchTab('forum')" id="tab-forum" class="border-b-2 border-[#5B1963] text-[#5B1963] pb-3 transition focus:outline-none">
            Forum
        </button>
        <button onclick="switchTab('tugas')" id="tab-tugas" class="border-b-2 border-transparent text-slate-500 hover:text-[#5B1963] pb-3 transition focus:outline-none">
            Tugas Kelas
        </button>
        <button onclick="switchTab('anggota')" id="tab-anggota" class="border-b-2 border-transparent text-slate-500 hover:text-[#5B1963] pb-3 transition focus:outline-none">
            Anggota
        </button>
    </div>

    <!-- ================= TAB CONTENT: FORUM ================= -->
    <div id="content-forum" class="space-y-6">
        <!-- Kotak Pengumuman Guru -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-start space-x-4">
            <div class="bg-[#5B1963] text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm flex-shrink-0">
                G
            </div>
            <div class="flex-grow">
                <span class="font-bold text-slate-800 block">Bu Retno (Guru Pengampu)</span>
                <span class="text-xs text-slate-400">10 menit yang lalu</span>
                <p class="text-slate-600 mt-3 text-sm leading-relaxed">
                    Selamat pagi anak-anak, silakan pelajari video teknik pencatokan smoothing yang ada di menu Video Pembelajaran sebelum pertemuan praktik besok di salon sekolah ya. Tetap patuhi K3!
                </p>
            </div>
        </div>
    </div>

    <!-- ================= TAB CONTENT: TUGAS (Hidden) ================= -->
    <div id="content-tugas" class="space-y-4 hidden">
        <!-- Kartu Tugas 1 -->
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 flex justify-between items-center hover:border-slate-200 transition">
            <div class="flex items-center space-x-4">
                <div class="bg-[#FF8A8A]/10 text-[#5B1963] p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800 text-sm hover:underline cursor-pointer">Tugas 1: Analisis Porositas Rambut Model</h3>
                    <span class="text-xs text-slate-400">Tenggat: Besok, 23.59 WIB</span>
                </div>
            </div>
            <span class="text-xs font-semibold bg-emerald-50 text-emerald-600 px-3 py-1 rounded-full">Ditugaskan</span>
        </div>
    </div>

    <!-- ================= TAB CONTENT: ANGGOTA (Hidden) ================= -->
    <div id="content-anggota" class="space-y-6 hidden">
        <!-- Bagian Pengajar -->
        <div>
            <h2 class="text-lg font-bold text-[#5B1963] border-b border-slate-200 pb-2 mb-4">Pengajar</h2>
            <div class="flex items-center space-x-3 px-2">
                <div class="bg-[#5B1963] text-white w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold">BR</div>
                <span class="text-sm font-medium text-slate-800">Bu Retno M.Pd.</span>
            </div>
        </div>
        <!-- Bagian Teman Sekelas -->
        <div>
            <h2 class="text-lg font-bold text-[#5B1963] border-b border-slate-200 pb-2 mb-4">Teman Sekelas</h2>
            <div class="space-y-4 px-2">
                <div class="flex items-center space-x-3">
                    <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold">A</div>
                    <span class="text-sm font-medium text-slate-800">Ahmad Dhani</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="bg-slate-200 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold">S</div>
                    <span class="text-sm font-medium text-slate-800">Siti Nurhaliza</span>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- SCRIPT PENGATUR TAB INTERAKTIF -->
<script>
    function switchTab(tabName) {
        // 1. Ambil semua elemen konten dan tab
        const tabs = ['forum', 'tugas', 'anggota'];
        
        tabs.forEach(tab => {
            const contentEl = document.getElementById(`content-${tab}`);
            const tabEl = document.getElementById(`tab-${tab}`);
            
            if (tab === tabName) {
                // Tampilkan konten yang dipilih
                contentEl.classList.remove('hidden');
                // Beri gaya aktif pada tombol tab
                tabEl.classList.remove('border-transparent', 'text-slate-500');
                tabEl.classList.add('border-[#5B1963]', 'text-[#5B1963]');
            } else {
                // Sembunyikan konten lainnya
                contentEl.classList.add('hidden');
                // Kembalikan gaya pasif tombol tab
                tabEl.classList.remove('border-[#5B1963]', 'text-[#5B1963]');
                tabEl.classList.add('border-transparent', 'text-slate-500');
            }
        });
    }
</script>
@endsection