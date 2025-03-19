<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('kode_unit');
            $table->integer('hm_km');
            $table->boolean('engine_oil');
            $table->boolean('transmission_oil');
            $table->boolean('axle_oil');
            $table->boolean('final_drive');
            $table->boolean('power_steering');
            $table->boolean('hydraulic');
            $table->timestamps();
        });
    }

    /**
     * Undo migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
