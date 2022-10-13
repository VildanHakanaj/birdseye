@foreach($movies as $movie)
    <div class="card">
        <div class="movie-card movie-card--small">
            <img class="movie-card__image" src="{{url($movie->thumbnail_regular_medium)}}">
            <div class="movie-card__overlay">
                <div class="movie-card__bookmark">
                    <img src="{{url("images/icon-bookmark-empty.svg")}}" alt="Bookmark icon">
                </div>
                <div class="movie-card__play">
                    <img src="{{url("images/icon-play.svg")}}" alt="">
                    <span>Play</span>
                </div>
            </div>
        </div>
        <div class="card__meta">
            <div class="mb-5 card__info text-white body-sm">
                {{$movie->year}} &dot; Tv Series &dot; {{ $movie->rating }}
            </div>
            <h2 class="text-white heading-xs">{{$movie->title}}</h2>
        </div>

    </div>
@endforeach
