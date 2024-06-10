<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('jadwalibadahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaibadah');
            $table->string('ayatalkitab');
            $table->date('haritanggal');
            $table->time('waktu')->default('10:00:00');
            $table->string('pelayan');
            $table->string('lokasiibadah');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            // Membuat foreign key constraint
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('jadwalibadahs');
    }
};
