<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peminjam');
            $table->string('jk');
            $table->string('status');
            $table->string('jurusan');
            $table->string('no_telp');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_users');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->foreign('id_barang')->references('id')
                ->on('barang')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_users')->references('id')
                ->on('users')->onUpdate('cascade')
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
        Schema::dropIfExists('peminjaman');
    }
}
