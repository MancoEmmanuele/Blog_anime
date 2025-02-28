<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anime Tv</title>
    @vite(['resources/css/app.css','rusources/js/app.js'])
  </head>
  <body>
     <x-navbar/>

     <x-header headerTitle={{$headerTitle}} />
    
    <div class="min-vh-100">
        {{$slot}}
    </div>

<x-footer/>
  </body>
</html>