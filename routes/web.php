<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistroController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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



Route::view('/', 'home') ->name('home'); 
Route::view('/dashboard', 'dashboard') ->name('dashboard')->middleware('auth');  

Route::get('/registro', [RegistroController::class, 'create'])->name('registro.index');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');// Guarda la informacion
Route::post('/ciudads', [RegistroController::class, 'ciudads']);

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); 

Route::post('logout', [LoginController::class, 'logout']); 

Route::resource('cursos', \App\Http\Controllers\CursoController::class);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

 