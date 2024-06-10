<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user'); // Menggunakan unsignedBigInteger untuk menyelaraskan dengan bigIncrements
            $table->date('tanggal');
            $table->enum('kategori', ['Kas gereja', 'Persembahan', 'Danasosial', 'Donasi', 'Lainnya']);
            $table->bigInteger('pemasukan');
            $table->bigInteger('pengeluaran');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // Tambahkan foreign key untuk id_user
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangans');
    }
}
