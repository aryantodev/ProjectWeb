<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\rawatInapController;


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

// Rute untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Rute untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/menuUtama', function () {
    return view('admin.menuUtama');
})->name('admin.menuUtama');


// Rute untuk dashboard user
Route::get('/user/menuUtama', function () {
    return view('user.menuUtama');
})->name('user.menuUtama');





// Route untuk menampilkan semua data (Read)
Route::get('/user/rawatInap', [RawatInapController::class, 'indexUser'])->name('user.rawatInap.index');
Route::get('/admin/rawatInap', [RawatInapController::class, 'indexAdmin'])->name('admin.rawatInap.index');

// Route untuk menampilkan form create
Route::get('/user/rawatInap/create', [RawatInapController::class, 'createUser'])->name('user.rawatInap.createUser');
Route::get('/admin/rawatInap/create', [RawatInapController::class, 'createAdmin'])->name('admin.rawatInap.createAdmin');

// Route untuk menyimpan data baru (Create)
Route::post('/admin/rawatInap', [RawatInapController::class, 'storeAdmin'])->name('admin.rawatInap.store');
Route::post('/user/rawatInap', [RawatInapController::class, 'storeUser'])->name('user.rawatInap.store');

// Route untuk menampilkan form edit (GET)
Route::get('/rawatInap/{id}/edit', [RawatInapController::class, 'edit'])->name('rawatInap.edit');

// Route untuk menyimpan perubahan (PUT/PATCH)
Route::put('/rawatInap/{id}', [RawatInapController::class, 'update'])->name('rawatInap.update');

// Route untuk menghapus data (DELETE)
Route::delete('/rawatInap/{id}', [RawatInapController::class, 'destroy'])->name('rawatInap.destroy');

Route::get('/UGD/ugd', function () {
    return view('UGD.index');
})->name('UGD.index');