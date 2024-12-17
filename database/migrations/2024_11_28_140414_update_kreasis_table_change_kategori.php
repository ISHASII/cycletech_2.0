<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('kreasis', function (Blueprint $table) {
            $table->dropColumn('kategori_kreasi'); // Hapus kolom yang menyimpan ID
            $table->string('kategori_kreasi');    // Tambahkan kolom baru untuk menyimpan nama kategori
        });
    }

    public function down(): void
    {
        Schema::table('kreasis', function (Blueprint $table) {
            $table->dropColumn('kategori_kreasi'); // Hapus kolom baru
            $table->unsignedBigInteger('kategori_kreasi'); // Tambahkan kembali kolom ID
        });
    }
};
