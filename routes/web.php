<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

// import java.io ;

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('dua', function () {
	return view('kedua');
});

Route::get('tiga', function () {
    return view('bootstrap1');
});

Route::get('empat', function () {
    return view('bootstrapcsslat2');
});

Route::get('lima', function () {
    return view('linktree');
});

Route::get('enam', function () {
    return view('js1');
});

Route::get('tujuh', function () {
    return view('validasi');
});

Route::get('delapan', function () {
    return view('index');
});

Route::get('ETS', function () {
    return view('atlsn');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

Route::get('/pegawai/{name}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
