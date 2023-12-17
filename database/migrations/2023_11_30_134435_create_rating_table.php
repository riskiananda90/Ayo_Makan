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
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_restoran')->constrained('restoran','id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_pesanan')->constrained('pesanan','id')->onUpdate('cascade')->onDelete('cascade');
            $table->text('komentar');
            $table->integer('rating');
            $table->timestamp('tanggal_rating');
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
        Schema::dropIfExists('rating');
    }
};
