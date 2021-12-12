<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->integer('stok');
            $table->date('tgl_masuk');
            $table->string('kondisi');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_lokasi');
            $table->string('jurusan');
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
        Schema::dropIfExists('barang');
    }
}
