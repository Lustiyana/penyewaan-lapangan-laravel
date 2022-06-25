<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    return view('user/login');
});

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('register_admin', [UserController::class, 'register_admin'])->name('register_admin');
Route::post('register_admin', [UserController::class, 'register_admin_action'])->name('register_admin.action');
Route::get('login_admin', [UserController::class, 'login_admin'])->name('login_admin');
Route::post('login_admin', [UserController::class, 'login_admin_action'])->name('login_admin.action');

Route::get('homeAdmin', [HomeController::class, 'homeAdmin'])->name('homeAdmin')->middleware('is_admin');

Route::get('home', function () {
    return view('home');
})->name('home');
Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('lapangan', [AdminController::class, 'lapangan'])->name('lapangan');
Route::get('transaksi', [AdminController::class, 'transaksi'])->name('transaksi');