<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/product', [ProductoController::class, 'index'])->name('product.index');

Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');

Route::post('/product', [ProductoController::class, 'store'])->name('product.store');
