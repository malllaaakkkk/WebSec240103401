<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', [NumberController::class, 'showTask1'])->name('task1.form');

Route::post('/check-even-odd', [NumberController::class, 'checkEvenOdd'])->name('check.evenodd');

Route::post('/multiplication-table', [NumberController::class, 'multiplicationTable'])->name('multiplication.table');

Route::get('/even-odd/{number}', [NumberController::class, 'evenOddFromUrl'])->name('evenodd.url');

Route::get('/multiplication/{number}', [NumberController::class, 'multiplicationFromUrl'])->name('multiplication.url');