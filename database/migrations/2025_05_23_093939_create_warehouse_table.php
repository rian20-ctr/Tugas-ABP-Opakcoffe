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
    Schema::create('warehouse', function (Blueprint $table) {
        $table->id('id_stok');
        $table->string('nama_barang');
        $table->string('kategori');
        $table->decimal('harga', 10, 2);
        $table->integer('stok_tersedia');
        $table->unsignedBigInteger('user_id');
        $table->string('image')->nullable();
        $table->integer('stok_awal');
        $table->integer('stok_berkurang');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse');
    }
};
