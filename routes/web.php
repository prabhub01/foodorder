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

// CRUD Foodcategory
Route::get('/add-category', [App\Http\Controllers\FoodcategoryController::class, 'index'])->name('add-category');
Route::post('/submit', [App\Http\Controllers\FoodcategoryController::class, 'store'])->name('submit');
Route::get('/editcategory/{id}', [App\Http\Controllers\FoodcategoryController::class, 'edit'])->name('editcategory');
Route::post('/updatecategory/{id}', [App\Http\Controllers\FoodcategoryController::class, 'update'])->name('updatecategory');
Route::get('/delete-category/{id}', [App\Http\Controllers\FoodcategoryController::class, 'destroy'])->name('delete-category');

// CRUD Fooditems
Route::get('/add-food-item', [App\Http\Controllers\FooditemController::class, 'index'])->name('add-food-item');
Route::post('/submit-fooditem', [App\Http\Controllers\FooditemController::class, 'store'])->name('submit-fooditem');
Route::get('/editfooditem/{id}', [App\Http\Controllers\FooditemController::class, 'edit'])->name('editfooditem');
Route::post('/updatefooditem/{id}', [App\Http\Controllers\FooditemController::class, 'update'])->name('updatefooditem');
Route::get('/delete-fooditem/{id}', [App\Http\Controllers\FooditemController::class, 'destroy'])->name('delete-fooditem');






