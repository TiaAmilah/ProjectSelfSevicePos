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

*/

// routes/web.php atau routes/api.php

// Menampilkan semua user
Route::get('/users', 'UserController@index');

// Menampilkan form tambah user
Route::get('/users/create', 'UserController@create');

// Menyimpan user baru
Route::post('/users', 'UserController@store');

// Menampilkan detail user
Route::get('/users/{user}', 'UserController@show');

// Menampilkan form edit user
Route::get('/users/{user}/edit', 'UserController@edit');

// Update data user
Route::put('/users/{user}', 'UserController@update');

// Menghapus user
Route::delete('/users/{user}', 'UserController@destroy');
