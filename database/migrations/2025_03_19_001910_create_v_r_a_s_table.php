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
        Schema::create('vras', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable(); // Misal KSY1 atau KG_TRACTOR
            $table->string('vehicle_running_account');
            $table->string('order_no');
            $table->decimal('budget_2025', 10, 3); // Angka dengan 3 desimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vras');
    }
};
