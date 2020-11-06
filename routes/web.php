<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/novo', [App\Http\Controllers\HomeController::class, 'novo'])->name('novo');
Route::post('/novo', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::get('/excluir/{id}', [App\Http\Controllers\HomeController::class, 'excluir'])->name('excluir');
Route::get('/editar/{id}', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar');
Route::post('/editar/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('editar');
