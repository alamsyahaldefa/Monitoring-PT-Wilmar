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
        Schema::create('laporan_harian_mesin', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal_waktu');
            $table->string('nomor_kendaraan', 20)->nullable();
            $table->string('nama_operator', 100)->nullable();
            $table->string('jenis_kerja_1', 50)->nullable();
            $table->string('blok_kerja_1', 10)->nullable();
            $table->string('jenis_kerja_2', 50)->nullable();
            $table->string('blok_kerja_2', 10)->nullable();
            $table->string('jenis_kerja_3', 50)->nullable();
            $table->string('blok_kerja_3', 10)->nullable();
            $table->string('jenis_kerja_4', 50)->nullable();
            $table->string('blok_kerja_4', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_harian_mesin');
    }
};
