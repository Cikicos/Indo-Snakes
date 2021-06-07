<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SnakeController extends Controller
{
    public function loginAksi(Request $request){
        $name = $request->name;
        $password = $request->password;

        if(Auth::attempt(['name' => $name, 'password' => $password])){
            return redirect('/index');
        } else {
            return view('login');
        }
    }

    public function dashboard(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function daftar(){
        return view('register');
    }
    
    public function register(Request $request)
    {
            DB::table('users')->insert([
                'name' => $request -> name,
                'email' => $request -> email,
                'password' => bcrypt($request->password)
            ]);
            return redirect('/');
    }

    public function tentang(){
        return view('tentang');
    }

    public function index()
    {
        return view('index');
    }

    public function berbisa()
    {
        return view('berbisa');
    }

    public function biasa()
    {
        return view('biasa');
    }

    public function rs()
    {
        return view('rs');
    }

    public function tolong()
    {
        return view('tolong');
    }

    public function menangkap()
    {
        return view('menangkap');
    }
}
