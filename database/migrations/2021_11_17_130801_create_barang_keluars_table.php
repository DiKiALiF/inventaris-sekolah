<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah');
            $table->date('tgl_keluar');
            $table->unsignedBigInteger('id_lokasi');
            $table->string('jurusan');
            $table->foreign('id_barang')->references('id')
                ->on('barang')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_lokasi')->references('id')
                ->on('lokasi')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('barang_keluar');
    }
}
