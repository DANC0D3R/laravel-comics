<main>
    {{-- JUMBOTRON --}}
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
    </div>
    {{-- CARD BOX --}}
    <div class="container">
        <h2>Current series</h2>
        {{-- CARDS --}}
        <div class="card-section">
            @foreach ($comics as $comic)
            <div class="card">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    <figcaption>{{ $comic['series'] }}</figcaption>
                </figure>
            </div>
            @endforeach
        </div>
        {{-- BUTTON --}}
        <div class="text-center">
            <button>Load More</button>
        </div>
    </div>
</main>