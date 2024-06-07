<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKeluargasTable extends Migration
{
    public function up()
    {
        Schema::create('anggota_keluargas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kepala_keluarga_id')->constrained('kepala_keluargas')->onDelete('cascade');
            $table->string('nama');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->enum('baptis', ['Sudah Baptis', 'Belum Baptis'])->default('Belum Baptis');
            $table->enum('sidi', ['Sudah Sidi', 'Belum Sidi'])->default('Belum Sidi');
            $table->string('alamat');
            $table->bigInteger('notelpon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anggota_keluargas');
    }
}
