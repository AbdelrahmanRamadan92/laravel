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
// Authentication group middleware
Route::middleware('auth')->group(function(){
Route::get('/user',[\App\Http\Controllers\userController::class , 'index'])->name('user.index');
Route::get('/create',[\App\Http\Controllers\userController::class , 'create'])->name('user.create');
Route::post('/user',[\App\Http\Controllers\userController::class , 'store'])->name('user.store');
Route::get('/show/{id}',[\App\Http\Controllers\userController::class , 'show'])->name('user.show');
Route::get('/user/{id}',[\App\Http\Controllers\userController::class , 'edit'])->name('user.edit');
Route::put('/user/{id}',[\App\Http\Controllers\userController::class , 'update'])->name('user.update');
Route::delete('/user/{id}',[\App\Http\Controllers\userController::class , 'delete'])->name('user.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


