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
      Schema::create('detailKategori', function (Blueprint $table) {
       $table->increments('id_detail_kategori');
       $table->unsignedInteger('id_kategori');
       $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
       $table->unsignedInteger('id_barang');
       $table->foreign('id_barang')->references('id_barang')->on('barang');
       $table->char('nama_barang',50);
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
