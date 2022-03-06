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

Route::get('/', 'IndexController@home');
Route::get('/matakuliah/list', 'MataKuliahController@list');
Route::post('/matakuliah/save', 'MataKuliahController@save');
Route::post('/matakuliah/update', 'MataKuliahController@update');
Route::get('/matakuliah/delete/{id}', 'MataKuliahController@delete');

Route::get('/profil/mhs', 'MahasiswaController@list');
Route::post('/profil/save', 'MahasiswaController@save');
Route::post('/profil/update', 'MahasiswaController@update');

Route::get('/profil', function(){
    return view('halaman.profil');
});

Route::get('/data-kelas', function(){
    return view('table.tableK');
});

Route::get('/kelas', function(){
    return view('table.tambahK');
});

Route::get('/kelas/create', 'KelasController@kelasku');
Route::post('/tambahkelas', 'KelasController@save');
Route::get('/tambahkelas', 'KelasController@tampil');