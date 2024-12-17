<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\LoginController;

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

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'create_akun'])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'do_login'])->name('do_login');

Route::get('/menuUtama', function () {
    return view('menuUtama', [
        'title' => 'Menu Utama'
    ]);
});

Route::get('/layout', function () {
    return view('layout', [
        'title' => 'Menu Utama'
    ]);
});