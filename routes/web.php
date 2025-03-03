<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/anime-detail/{id}/{anime_title}', [PublicController::class, 'anime_detail'])->name('anime_detail');

Route::get('/animes-by-genres/{id}/{anime_genre}', [PublicController::class, 'animes_by_genres'])->name('animes_by_genres');