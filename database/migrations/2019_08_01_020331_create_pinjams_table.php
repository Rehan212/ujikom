<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_pinjam');
            $table->unsignedBigInteger('id_anggota');
            $table->string('besar_pinjam');
            $table->date('tgl_pengajuan_pinjam');
            $table->date('tgl_acc_pinjam');
            $table->date('tgl_pinjam');
            $table->date('tgl_pelunasan');
            $table->unsignedBigInteger('id_angsuran');
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
        Schema::dropIfExists('pinjams');
    }
}
