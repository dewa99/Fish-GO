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
            $table->unsignedInteger('id_katalog');
            $table->unsignedInteger('id_order');  
            $table->char('nama_barang',50);
            $table->mediumInteger('harga_barang');
            // foreign key
<<<<<<< HEAD
            $table->foreign('id_order')->references('id_order')->on('order');
            $table->foreign('id_katalog')->references('id_katalog')->on('katalog');
=======
            $table->foreign('id_order')->references('id_order')->on('order')->onDelete('CASECADE')->onUpdate('CASECADE');
            $table->foreign('id_katalog')->references('id_katalog')->on('katalog')->onDelete('CASECADE')->onUpdate('CASECADE');
>>>>>>> 0231c328451cb4b434f65fb58e4eb8ef3462400d
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
