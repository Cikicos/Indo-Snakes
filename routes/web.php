<?php
use App\Http\Controllers\SnakeController;
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

Route::post('/loginAksi',[SnakeController::Class,'loginAksi']);
Route::get('/login',[SnakeController::Class,'login']);
Route::get('/daftar',[SnakeController::Class,'daftar']);
Route::post('/register',[SnakeController::Class,'register']);
Route::get('/tentang',[SnakeController::Class,'tentang']);
Route::get('/index',[SnakeController::Class,'index']);
Route::get('/berbisa',[SnakeController::Class,'berbisa']);
Route::get('/biasa',[SnakeController::Class,'biasa']);
Route::get('/rs',[SnakeController::Class,'rs']);
Route::get('/tolong',[SnakeController::Class,'tolong']);
Route::get('/menangkap',[SnakeController::Class,'menangkap']);
Route::get('/master'.[SnakeController::Class,'master']);