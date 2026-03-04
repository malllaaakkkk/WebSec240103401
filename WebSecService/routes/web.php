<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController; // Make sure this line exists

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Task 1 page
Route::get('/task1', function () {
    return view('task1');
});

// Task 1 forms
Route::post('/check-even-odd', [NumberController::class, 'checkEvenOdd'])->name('check.evenodd');
Route::post('/multiplication-table', [NumberController::class, 'multiplicationTable'])->name('multiplication.table');

Route::get('/even-odd/{number}', [NumberController::class, 'evenOddFromUrl'])->name('evenodd.url');
Route::get('/multiplication/{number}', [NumberController::class, 'multiplicationFromUrl'])->name('multiplication.url');