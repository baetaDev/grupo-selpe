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


Route::get('/create', [App\Http\Controllers\api\VagasController::class, 'create'])->name('create');

Route::post('/store', [App\Http\Controllers\api\VagasController::class, 'store'])->name('store');


Route::delete('destroy/{id}', [App\Http\Controllers\api\VagasController::class, 'destroy'])->name('destroy');

Route::post('like/{id}', [App\Http\Controllers\api\VagasController::class, 'like'])->name('like');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\api\VagasController::class, 'index'])->name('home');




Auth::routes();


