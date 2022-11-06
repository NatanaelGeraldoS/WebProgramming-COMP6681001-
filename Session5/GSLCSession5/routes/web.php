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

// Basic Routing
// Route::get('/mahasiswa', function(){
//     return view('mahasiswa');
// });

// Grouping the view into specific Folder
// Route::get('/mahasiswa', function () {
//     return view('universitas.mahasiswa');
// });

// Sending Parameter from Routing

// Name

// Route::get('/mahasiswa', function () {
//     return view('universitas.mahasiswa', ['mahasiswa01' => 'Natanael']);
// });

// Name and Score
Route::get('/mahasiswa', function () {
    $nama = 'Natanael';
    $nilai = 100;
    return view('universitas.mahasiswa', compact('nama', 'nilai'));
});