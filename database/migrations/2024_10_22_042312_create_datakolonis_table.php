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
        Schema::create('datakolonis', function (Blueprint $table) {
            $table->id();
            $table->string('jenisLebah');
            $table->date('tanggalPengadaan');
            $table->string('gambar')->nullable();
            $table->text('riwayatPanen');
            $table->text('catatanKesehatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakolonis');
    }
};
