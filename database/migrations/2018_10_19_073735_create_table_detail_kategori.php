<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detail_kategori', function (Blueprint $table) {
       $table->increments('id_detail_kategori');
       $table->integer('id_kategori');->unsigned();
       $table->integer('id_barang');->unsigned();
       $table->char('nama_barang'50);
           // foreign key id_kategori
       $table->foreign('id_kategori','id_kategori')->references('id_kategori')->on('kategori')->
       onDelet('casecade')->onUpdate('casecade');
       // foreign key id_barang
       $table->foreign('id_barang','id_barang')->references('id_barang')->on('barang')->
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
      Schema::dropIfExists('detail_kategori');
    }
  }
