<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {
    return "Halo, selamat datang di tutorial laravel www.malascoding.com";
});

Route::get('halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan-1', function () {
    return view('pertemuan1');
});

Route::get('pertemuan-2', function () {
    return view('pertemuan2');
});

Route::get('pertemuan-3', function () {
    return view('pertemuan3');
});

Route::get('pertemuan-4', function () {
    return view('pertemuan4');
});

Route::get('pertemuan-5-1', function () {
    return view('pertemuan5-1');
});

Route::get('pertemuan-5-2', function () {
    return view('pertemuan5-2');
});

Route::get('pertemuan-6', function () {
    return view('pertemuan6');
});

Route::get('Perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
