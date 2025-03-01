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
}
