<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', [NumberController::class, 'showTask1'])->name('task1.form');

Route::post('/check-even-odd', [NumberController::class, 'checkEvenOdd'])->name('check.evenodd');

Route::post('/multiplication-table', [NumberController::class, 'multiplicationTable'])->name('multiplication.table');

Route::get('/even-odd/{number}', [NumberController::class, 'evenOddFromUrl'])->name('evenodd.url');

Route::get('/multiplication/{number}', [NumberController::class, 'multiplicationFromUrl'])->name('multiplication.url');

Route::get('/getProducts', [ProductsController::class, 'getProducts'])->name('task2');

Route::get('products', [ProductsController::class, 'list'])->name('products_list');


Route::get('/getProducts', [ProductsController::class, 'getProducts'])->name('task2');
Route::get('/viewForm', [ProductsController::class, 'viewForm']);
Route::post('/addProduct', [ProductsController::class, 'addProduct']);