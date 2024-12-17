<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kreasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kreasi');
            $table->string('author');
            $table->string('kategori_kreasi');
            $table->string('foto_kreasi')->nullable();
            $table->text('alat_bahan');
            $table->text('langkah');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kreasis');
    }
};