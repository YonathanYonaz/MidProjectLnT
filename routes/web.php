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
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});

Route::get('/create', [KaryawanController::class, 'getCreatePage'])->name('getCreatePage'); // untuk tampilan form create booknya

Route::post('/create-karyawan', [KaryawanController::class, 'createBook'])->name('createKaryawan'); // untuk ngirim data ke database

Route::delete('/delete', [KaryawanController::class, 'delete'])->name('delete');


