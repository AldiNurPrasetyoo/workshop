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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id_kendaraan');
            $table->string('no_pol',10);
            $table->string('tahun_kendaraan',4);
            $table->string('no_mesin')->unique(12);
            $table->string('no_rangka')->unique(17);
            $table->string('kapasitas_mesin',4);
            $table->string('transmisi',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
