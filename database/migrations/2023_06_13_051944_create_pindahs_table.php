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
        Schema::create('pindahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('desa');
            $table->string('kecamatan');
            $table->date('tanggal_pindah');
            $table->text('alasan_pindah');
            $table->text('alamat_pindah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pindahs');
    }
};
