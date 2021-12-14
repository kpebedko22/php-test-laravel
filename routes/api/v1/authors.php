<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::middleware([]) //['auth:sanctum',])
    ->name('authors.')
    ->namespace('\App\Http\Controllers')
    ->group(function () {
        Route::get('/authors', [AuthorController::class, 'index'])->name('index');
        Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('show');
        Route::post('/authors', [AuthorController::class, 'store'])->name('store');
        Route::patch('/authors/{id}', [AuthorController::class, 'update'])->name('update');
        Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('destroy');
    });