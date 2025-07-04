<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori');
            $table->text('isi');
            $table->string('gambar')->nullable();  // Add this line for the image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};