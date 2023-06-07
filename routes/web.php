<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jenisvaksin;
use App\Http\Controllers\lokasi;
use App\Http\Controllers\dokter;
use App\Http\Controllers\peserta;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout.master');
});


// Route Jenis Vaksin
Route::get('/jenisvaksin/tambah',function(){
    return view('pages.jenisvaksin.tambah');
});

Route::get('/jenisvaksin', function(){
    return view('pages.jenisvaksin.tampil');
});

//Nambah kOMEN AJAH

Route::resource('jenisvaksin',jenisvaksin::class);
Route::resource('lokasi',lokasi::class);
Route::resource('dokter',dokter::class);
Route::resource('peserta',peserta::class);