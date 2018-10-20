<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\akses_data;

class c_akses_data extends Controller
{
    
    public function insertData(Request $req)
    {
        $namalengkap = $req->input('namalengkap');
        $username = $req->input('username');
        $email = $req->input('email');
        $password = $req->input('password');

        insert();

        return view('index');
    }

    public function viewData()
    {

      
      $users = DB::table('user')->get();
      return view('tes', ['users'=>$users]);  

    }
    public function login()
    {
    	
    }

}


