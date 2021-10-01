<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/registro', [RegistroController::class, 'create'])->name('registro.index');

Route::get('/ciudads', [RegistroController::class, 'ciudads']);

Route::get('/login', [LoginController::class, 'create'])->name('login.index');

 