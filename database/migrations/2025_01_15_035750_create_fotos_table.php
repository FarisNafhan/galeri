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
        Schema::create('fotos', function (Blueprint $table) {
            $table->bigIncrements('FotoID');
            $table->string('Judul');
            $table->text('Deskripsi');
            $table->date('Tanggal');
            $table->string('LokasiFile');
            $table->unsignedBigInteger('AlbumID');
            $table->foreign('AlbumID')->references('AlbumID')->on('albums')->onDelete('cascade');   
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('UserID')->on('albums')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
