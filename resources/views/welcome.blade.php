<x-layout headerTitle="AnimeTv">

    <section class="container my-5">
        <div class="row">
            @foreach ($animes as $anime)
                <div class="col-12 col-md-4 my-4 d-flex justify-contnt-center">
                    <x-card
                    img="{{$anime['images']['jpg']['image_url']}}"
                    title="{{$anime['title']}}"
                    synopsis="{{Str::limit ($anime['synopsis'], 100)}}"
                    />
                </div>
            @endforeach
        </div>
    </section>

</x-layout>
