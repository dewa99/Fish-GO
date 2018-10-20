<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akses_data extends Model
{
    public function scopeinsert()
    {

    	$data = array('nama_user'=>$namalengkap,'email'=>$email,'username'=>$username,'password_user'=>$password);
        DB::table('user')->insert($data);
    }
}
