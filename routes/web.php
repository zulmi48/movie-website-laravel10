<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie', [MovieController::class, 'index'])->name('movie.movie');
Route::get('/movie/{movie}', [MovieController::class,'show'])->name('movie.show');
