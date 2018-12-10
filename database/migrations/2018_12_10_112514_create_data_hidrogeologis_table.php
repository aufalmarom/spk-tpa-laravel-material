<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHidrogeologisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hidrogeologis', function (Blueprint $table) {
            $table->increments('id');
            $table->String('daerah');
            $table->unsignedInteger('nilai_klasifikasi');
            $table->String('nilai_parameter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_hidrogeologis');
    }
}
