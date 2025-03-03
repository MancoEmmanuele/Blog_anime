<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function homepage()
    {

        $animes = Http::get('https://api.jikan.moe/v4/anime')->json();

        return view('welcome', ['animes' => $animes['data']]);
    }

    public function anime_detail($id)
    {
        $anime = Http::get("https://api.jikan.moe/v4/anime/$id")->json('data');
        return view('anime_detail', ["anime" => $anime]);
    }

    public function animes_by_genres($id, $anime_genre)
    {
// applicazione delle query string=>anime?genres

        $animes = Http::get("https://api.jikan.moe/v4/anime", ['genres' => $id, 'limit' => 15])->json('data');
        return view('animes_by_genres', ['animes' => $animes, 'anime_genre' => $anime_genre]);
    }
}
