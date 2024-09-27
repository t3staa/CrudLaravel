<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class ,'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
