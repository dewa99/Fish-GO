<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id_order');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->date('tanggal_order');
            $table->string('keterangan',500);
            $table->mediumInteger('total');
            $table->mediumInteger('jumlah_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
