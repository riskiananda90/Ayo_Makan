<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_restoran')->constrained('restoran','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kategori')->constrained('kategori','id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_menu');
            $table->decimal('harga_menu');
            $table->string('deskripsi');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
