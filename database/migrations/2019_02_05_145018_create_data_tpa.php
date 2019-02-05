<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tpas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kecamatan')->unsigned();
            $table->integer('nilai_klasifikasi_kelerengan')->unsigned();
            $table->String('nilai_parameter_kelerengan');
            $table->integer('nilai_klasifikasi_penggunaan_lahan')->unsigned();
            $table->String('nilai_parameter_penggunaan_lahan');
            $table->integer('nilai_klasifikasi_rawan_bencana_longsor')->unsigned();
            $table->String('nilai_parameter_rawan_bencana_longsor');
            $table->integer('nilai_klasifikasi_curah_hujan')->unsigned();
            $table->String('nilai_parameter_curah_hujan');
            $table->integer('nilai_klasifikasi_hidrogeologi')->unsigned();
            $table->String('nilai_parameter_hidrogeologi');
            $table->integer('nilai_klasifikasi_jenis_tanah')->unsigned();
            $table->String('nilai_parameter_jenis_tanah');
            $table->integer('nilai_klasifikasi_rawan_bencana_banjir')->unsigned();
            $table->String('nilai_parameter_rawan_bencana_banjir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tpas');
    }
}
