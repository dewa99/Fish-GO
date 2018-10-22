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
            $table->integer('id_user');
            $table->date('tanggal_order');
            $table->string('keterangan'500);
            $table->mediuminteger('total');
            $table->mediuminteger('jumlah_harga');
            // foreignkey id_user
            $table->foreign('id_user','id_user')->references('id_user')->on('user')->
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
        Schema::dropIfExists('order');
    }
}
