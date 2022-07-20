<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPembangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pembangunans', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan')->nullable();
            $table->string('jenis')->nullable();
            $table->string('volume')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->double('pagu')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kecamatan')->nullable();
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
        Schema::dropIfExists('hasil_pembangunans');
    }
}
