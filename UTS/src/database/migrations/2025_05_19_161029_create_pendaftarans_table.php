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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beasiswa_id')->nullable(); 
            $table->string('nama');
            $table->date('tanggal_pendaftaran');
            $table->enum('jenis_beasiswa',['akademik', 'non_akademik']) -> nullable();
            $table->string('no_telpon');
            $table->string('email') -> unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
