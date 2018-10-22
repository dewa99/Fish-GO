<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('id_katalog')->unsigned();
            $table->integer('id_order')->unsigned();
            $table->char('nama_barang'50);
            $table->mediuminteger('harga_barang'50);
            // foreignkey id_katalog
            $table->foreign('id_katalog','id_katalog')->references('id_katalog')->on('katalog')->
            onDelet('casecade')->onUpdate('casecade');
            // foreignkey id_order
            $table->foreign('id_order','id_order')->references('id_order')->on('order')->
            onDelet('casecade')->onUpdate('casecade');  
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
