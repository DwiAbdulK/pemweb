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
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Jenis_Kelamin');
            $table->string('Nama_Orang_Tua');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->string('Agama');
            $table->string('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
