<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
use App\Http\Controllers\MatakuliahController;

Route::get('/mahasiswa', function () {
    return 'Hallo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama Saya: ' .$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'Nim xfghdfgh: ' .$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController ::class,'show']) ;

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{param1?}', [MatakuliahController ::class,'show']) ;


