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
        Schema::create('pendatangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('desa_asal');
            $table->date('tanggal_datang');
            $table->string('kecamatan_asal');
            $table->text('alamat_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendatangs');
    }
};
