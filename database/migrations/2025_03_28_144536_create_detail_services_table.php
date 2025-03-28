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
        Schema::create('detail_service', function (Blueprint $table) {
            $table->increments('id_detail_service');
            $table->unsignedInteger('id_service');
            $table->foreign('id_service')->references('id_service')->on('service');
            $table->string('sparepart',50);
            $table->integer('harga')->unsigned(7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_service');
    }
};
