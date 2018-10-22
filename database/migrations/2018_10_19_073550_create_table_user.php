<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->char('name_lengkap',100);
            $table->string('username'50);
            $table->string('password',50);
            $table->string('email')->unique();
            $table->string('alamat'100);
            $table->string('no_telepon'20);
            $table->enum('jenis_kelamin',['laki-laki','perempuan'])->default('laki-laki');
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
        Schema::dropIfExists('user');
    }
}
