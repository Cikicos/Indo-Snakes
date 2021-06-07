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
    return view('login');
});

Route::post('/loginAksi','SnakeController@loginAksi');
Route::get('/login','SnakeController@login');
Route::get('/daftar','SnakeController@daftar');
Route::post('/register','SnakeController@register');
Route::get('/tentang','Snakecontroller@tentang');
Route::get('/index','Snakecontroller@index');
Route::get('/berbisa','Snakecontroller@berbisa');
Route::get('/biasa','Snakecontroller@biasa');
Route::get('/rs','Snakecontroller@rs');
Route::get('/tolong','Snakecontroller@tolong');
Route::get('/menangkap','Snakecontroller@menangkap');
Route::get('/master'.'Snakecotroller@master');