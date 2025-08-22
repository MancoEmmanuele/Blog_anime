<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/anime-detail/{id}/{anime_title}', 'anime_detail')->name('anime_detail');
    Route::get('/animes-by-genres/{id}/{anime_genre}', 'animes_by_genres')->name('animes_by_genres');

});
