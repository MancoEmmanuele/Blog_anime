<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function homepage()
    {

        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');

        return view('welcome', ['animes' => $animes['data']]);
    }

    public function anime_detail($id){
        $anime = Http::get("https://api.jikan.moe/v4/anime/$id")->json('data');
        return view('anime_detail',["anime"=>$anime]);
    }
}
