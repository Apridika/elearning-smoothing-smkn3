<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('kategori'); // Contoh: Smoothing Rambut Virgin / Keratin Treatment
            $table->string('judul_praktik');
            $table->text('keterangan_singkat');
            $table->string('instagram_url'); // URL eksternal ke postingan IG siswa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyas');
    }
};
