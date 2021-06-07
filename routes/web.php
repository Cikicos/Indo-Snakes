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

Route::post('/loginAksi',[SnakeController::class,'loginAksi']);
Route::get('/login',[SnakeController::class,'login']);
Route::get('/daftar',[SnakeController::class,'daftar']);
Route::post('/register',[SnakeController::class,'register']);
Route::get('/tentang',[SnakeController::class,'tentang']);
Route::get('/index',[SnakeController::class,'index']);
Route::get('/berbisa',[SnakeController::class,'berbisa']);
Route::get('/biasa',[SnakeController::class,'biasa']);
Route::get('/rs',[SnakeController::class,'rs']);
Route::get('/tolong',[SnakeController::class,'tolong']);
Route::get('/menangkap',[SnakeController::class,'menangkap']);
Route::get('/master'.[SnakeController::class,'master']);