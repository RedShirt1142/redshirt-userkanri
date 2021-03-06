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
    return redirect('/users');
});

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

Route::get('/edit/{user_id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');

Route::post('/edit/{user_id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');

Route::post('/destroy/{user_id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
