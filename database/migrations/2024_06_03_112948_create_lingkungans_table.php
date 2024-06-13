<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLingkungansTable extends Migration
{
    public function up()
    {
        Schema::create('lingkungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lingkungan');
            $table->string('nama');
            // Tambahkan kolom lain yang diperlukan di sini
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('lingkungans');
    }
}
