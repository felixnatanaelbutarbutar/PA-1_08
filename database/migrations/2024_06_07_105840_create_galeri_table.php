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
        Schema::create('galeri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user'); // Menggunakan unsignedBigInteger untuk menyelaraskan dengan bigIncrements
            $table->string('nama');
            $table->string('photo');
            $table->timestamps();

            // Membuat foreign key constraint
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
