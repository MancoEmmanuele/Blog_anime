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
                        <li>{{ $genre['name'] }}</li>
                    @endforeach
                </ul>
                <p class="ls-4">Numero di episodi: {{$anime['episodes']}}</p>
                <p class="ls-4">Sinossi</p>
                <p>{{$anime['synopsis']}}</p>
            </div>

        </div>
    </section>

</x-layout>
