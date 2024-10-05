<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daftar_pejabat_strukturals', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('perangkat_daerah');
            $table->string('satuan_unit_kerja');
            $table->string('jabatan');
            $table->string('golongan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daftar_pejabat_strukturals');
    }
};
