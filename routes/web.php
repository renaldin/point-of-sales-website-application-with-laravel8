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
    return redirect()->route('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('is_admin');
Route::resource('product', App\Http\Controllers\ProductController::class)->middleware('is_admin');
Route::resource('order', App\Http\Controllers\OrderController::class)->middleware('is_admin');
