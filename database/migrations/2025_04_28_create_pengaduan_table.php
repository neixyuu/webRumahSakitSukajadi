<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
            $table->string('no_rm')->nullable();
            $table->string('kategori');
            $table->string('lokasi');
            $table->date('tanggal_kejadian');
            $table->text('message');
            $table->string('status')->default('Belum Diproses');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};