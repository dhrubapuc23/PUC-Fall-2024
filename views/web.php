<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::get('stripe', [StripeController::class, 'index']);
Route::post('stripe', [StripeController::class, 'charge'])->name('stripe.charge');
Route::get('pdf', [PDFController::class, 'index']);
