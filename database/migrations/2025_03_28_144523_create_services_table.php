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
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id_service');
            $table->unsignedInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan');
            $table->unsignedInteger('id_jenis_service');
            $table->foreign('id_jenis_service')->references('id_jenis_service')->on('jenis_service');
            $table->text('keluhan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
