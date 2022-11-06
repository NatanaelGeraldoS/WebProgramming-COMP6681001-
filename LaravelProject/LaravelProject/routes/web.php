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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilan data mahasiswa bernama $nama";
});

Route::get('/hubungi-kami', function () {
    return "<h1>Hubungi Kami</h1>";
});

Route::redirect('/contact-us', '/hubungi-kami');

Route::prefix('/Admin')->group(function () {
    Route::get('/', function () {
        echo 'Default';
    });
    Route::get('/mahasiswa', function () {
        echo 'Mahasiswa';
    });
    Route::get('/dosen', function () {
        echo 'Dosen';
    });
    Route::get('/karyawan', function () {
        echo 'karyawan';
    });
});

Route::fallback(function () {
    return 'Maaf kami sedang berkendala';
});
Route::get('/buku/1', function () {
    return "1";
});
Route::get('/buku/{a}', function ($a) {
    return "tes";
});



// Route::get('/buku/{b}', function ($b) {
//     return "Buku Saya ke-1 $b";
// });

// Route::get('/buku/{c}', function ($c) {
//     return "Buku kita ke-1 $c";
// });