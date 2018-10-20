<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_akses_halaman extends Controller
{
    public function index()
    {
    		return view('index');
    }
    public function loginfishgo()
    {
    	return view('login');
    }
    public function daftarfishgo()
    {
    	return view('daftar');
    }
     public function productfishgo()
    {
    	return view('product');
    }
    public function kategori()
    {
        return view('categories');
    }

}
