<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;

Route::get('/student/{id}', [StudentController::class, 'homepage']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/studentview', [StudentController::class, 'index']);
Route::resource('category', CategoryController::class);