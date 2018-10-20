<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'c_akses_halaman@index');
Route::get('/loginfish', 'c_akses_halaman@loginfishgo');
Route::get('/daftarfish', 'c_akses_halaman@daftarfishgo');
Route::get('/product', 'c_akses_halaman@productfishgo');
Route::post('/daftar', 'c_akses_data@insertData');
Route::get('/kategori', 'c_akses_halaman@kategori');
Auth::routes();

