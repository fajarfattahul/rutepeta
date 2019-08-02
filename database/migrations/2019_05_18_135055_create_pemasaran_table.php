<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemasaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */    public function up()
    {
        Schema::create('pemasaran', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_user')->unsigned();
            $table->integer('id_lokasi')->unsigned();
            $table->date('waktu_pemasaran');
            $table->enum('ket', ['proses', 'selesai', 'gagal']);
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
        Schema::dropIfExists('pemasaran');
    }
}
