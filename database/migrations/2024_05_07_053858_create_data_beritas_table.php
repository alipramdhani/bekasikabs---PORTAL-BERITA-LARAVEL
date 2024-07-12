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
       
        Schema::create('data_beritas', function (Blueprint $table) {
            $table->bigInteger('id_berita')->primary();
            $table->string('gambar');
            $table->string('kategori');
            $table->string('judul_berita');
            $table->text('isi');
            $table->date('tanggal');
            $table->string('reporter');
            $table->string('editor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_beritas');
    }
};
