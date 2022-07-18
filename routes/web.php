<?php

use App\Http\Controllers\Kampus;
use App\Http\Controllers\Siswa;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 
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
    return view('home' , [
        "title" => "Home"
    ]);
});

Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Berli",
        "email" => "Ada"
    ]);
});

Route::get('blog', function () {
    return view('posts', [
        "title" => "Blog"
    ]);
});


Route::get('siswa', [Siswa::class, 'siswa']);
Route::get('kampus', [Kampus::class, 'kampus']);
Route::get('toko', [TokoController::class, 'tampil']);