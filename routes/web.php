<?php

use Illuminate\Support\Facades\Auth;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/home', 301);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/saldo', [App\Http\Controllers\ContaController::class, 'saldo']);
Route::middleware('auth')->post('/saldo', [App\Http\Controllers\ContaController::class, 'getSaldo']);
Route::middleware('auth')->get('/deposito', [App\Http\Controllers\ContaController::class, 'deposito']);
Route::middleware('auth')->post('/deposito', [App\Http\Controllers\ContaController::class, 'depositar']);
Route::middleware('auth')->get('/saque', [App\Http\Controllers\ContaController::class, 'saque']);
Route::middleware('auth')->post('/saque', [App\Http\Controllers\ContaController::class, 'sacar']);
