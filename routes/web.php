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
    $list_dosen = ["Aji Promajaya","Ratna Mufidah","Adhi Rizal","Rini Mayasari","Arip Solehudin","Purwantoro","Iqbal Maulana","Dadang Yusup","Susilawati","Ibnu Adam"];
    return view('layout.dosen')->with('dosen', $list_dosen);
});

Route::get('/dosen', function () {
    $list_dosen = ["Aji Promajaya","Ratna Mufidah","Adhi Rizal","Rini Mayasari","Arip Solehudin","Purwantoro","Iqbal Maulana","Dadang Yusup","Susilawati","Ibnu Adam"];
    return view('layout.dosen')->with('dosen', $list_dosen);
});

Route::get('/mahasiswa', function () {
    $list_mahasiswa = ["Mohamad Fahrul Allawy","zai","xinq","joko kendil","matumbaman","nia","ephpey","toorontotokyo","disam","boruto"];
    return view('layout.mahasiswa')->with('mahasiswa', $list_mahasiswa);
});

Route::get('/matakuliah', function () {
    $list_matakuliah = ["Framework Pemrograman Web","Data Mining","Sistem Operasi","Technopreneur","Blockchain","Cloud Computing","Pemrograman Berbasis Mobile","Kecerdasan Buatan","Statistika dan Probabilitas","Rekayasa Perangkat Lunak"];
    return view('layout.matakuliah')->with('matakuliah', $list_matakuliah);
});

Route::fallback(function() {
    return view('fail');
});
