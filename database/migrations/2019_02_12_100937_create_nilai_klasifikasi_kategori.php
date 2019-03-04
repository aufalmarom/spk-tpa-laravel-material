<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKlasifikasiKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_klasifikasi_kategoris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parameter')->unsigned();
            $table->String('nilai_parameter');
            $table->integer('nilai_klasifikasi');
            $table->integer('created_by')->unsigned()->nullable();
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
        Schema::dropIfExists('nilai_klasifikasi_kategoris');
    }
}
