<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepalaKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_keluargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lingkungan_id');
            $table->string('namakeluarga');
            $table->string('alamat')->nullable();
            $table->decimal('peleantaon', 15, 2)->nullable();
            $table->timestamps();

            $table->foreign('lingkungan_id')->references('id')->on('lingkungans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepala_keluargas');
    }
}
