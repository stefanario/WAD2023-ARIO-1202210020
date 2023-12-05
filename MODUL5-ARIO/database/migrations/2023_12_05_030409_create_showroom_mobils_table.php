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
        Schema::create('showroom_mobils', function (Blueprint $table) {
            $table->id();
            $table->string("nama_mobil", 255);
            $table->string("brand_mobil", 255);
            $table->string("warna_mobil", 255);
            $table->string("tipe_mobil", 255);
            $table->integer("harga_mobil");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('showroom_mobils');
    }
};
