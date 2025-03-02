<x-layout headerTitle="{{ $anime['title'] }}">
    <section class="container my-5">
        <div class="row aligh-items-center ">
            <div class="col-12 col-md-6">
                <img class="img-custom" src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top"
                    alt="...">
            </div>
            <div class="col-12 col-md-6 d-flx justify-content-center">
                <p class="fs-4">Generi:</p>
                <ul>
                    @foreach ($anime['genres'] as $genre)
                        <a href="{{route('animes_by_genres',['id'=>$genre['mal_id'],'anime_genre'=>$genre['name']] )}}">
                            <li>{{ $genre['name'] }}</li>
                        </a>
                    @endforeach
                </ul>
                <p class="ls-4">Numero di episodi: {{ $anime['episodes'] }}</p>
                <p class="ls-4">Sinossi</p>
                <p>{{ $anime['synopsis'] }}</p>

                <a class="btn btn-primary" href="{{ route('homepage') }}">Torna alla Home</a>

            </div>

        </div>
    </section>

</x-layout>
