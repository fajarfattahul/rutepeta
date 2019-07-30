<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_lokasi');
            $table->string('latitude', 30)->nullable();
            $table->string('longitude', 30)->nullable();
            $table->unsignedInteger('id_barang');
            $table->integer('jumlah_barang');
            $table->enum('ket', ['proses', 'terkirim', 'gagal']);           
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
        Schema::dropIfExists('pemesanan');
    }
}
