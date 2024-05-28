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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_wa');
            $table->string('email');
            $table->string('lokasi');
            $table->enum('paket', ['Wisuda', 'Pre-Wedd', 'PasFoto', 'Maternity', 'Photoshoot','Personal']);
            $table->enum('tempat', ['Indoor', 'Outdoor']);
            $table->date('tanggal');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
