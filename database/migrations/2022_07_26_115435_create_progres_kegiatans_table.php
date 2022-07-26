<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pekerjaan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jenis')->nullable();
            $table->string('volume')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->double('nilai_pagu')->nullable();
            $table->double('nilai_kontrak')->nullable();
            $table->string('progres_fisik')->nullable();
            $table->double('progres_keuangan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('dinas')->nullable();
            $table->string('bidang')->nullable();
            $table->string('tahun')->nullable();
            $table->string('bulan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progres_kegiatans');
    }
}
