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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli')->nullable();
            $table->string('obat1')->nullable();
            $table->string('obat2')->nullable();
            $table->string('jumlah_obat1')->nullable();
            $table->string('jumlah_obat2')->nullable();
            $table->string('total_jumlah_obat')->nullable();
            $table->string('total_biaya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
