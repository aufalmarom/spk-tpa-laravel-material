<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKlasifikasiKriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_klasifikasi_kriterias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parameter')->unsigned();
            $table->integer('batas_bawah');
            $table->integer('batas_atas');
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
        Schema::dropIfExists('nilai_klasifikasi_kriterias');
    }
}
