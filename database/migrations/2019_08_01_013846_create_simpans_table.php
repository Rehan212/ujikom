<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimpansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_simpan');
            $table->unsignedBigInteger('id_anggota');
            $table->date('tgl_simpan');
            $table->string('besar_simpan');
            $table->string('ket');
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
        Schema::dropIfExists('simpans');
    }
}
