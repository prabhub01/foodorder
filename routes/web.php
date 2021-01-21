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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-category', [App\Http\Controllers\HomeController::class, 'category'])->name('add-category');
Route::get('/add-food-item', [App\Http\Controllers\HomeController::class, 'fooditem'])->name('add-food-item');
Route::post('/submit', [App\Http\Controllers\FoodcategoryController::class, 'store'])->name('submit');




