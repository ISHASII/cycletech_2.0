<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama Lengkap
            $table->string('phone'); // Nomor Handphone
            $table->string('email')->unique(); // Email
            $table->string('password'); // Password
            $table->string('photo')->nullable(); // Foto Profil
            $table->string('password_plaintext')->nullable(); // Password Plaintext (jika diperlukan)
            $table->rememberToken(); // Untuk fitur "remember me"
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabah');
    }
}