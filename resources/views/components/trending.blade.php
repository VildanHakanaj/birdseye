<div class="trending">
    <h2 class="trending__heading">Trending</h2>
    <div class="trending__carousel">
        @foreach($movies as $movie)
            <div class="movie-card movie-card--large">
                <img class="movie-card__image" src="{{url($movie->thumbnail_trending_large)}}"
                     alt="Man on a rock in front of the water holding a camera.">
                <div class="movie-card__overlay">
                    <div class="movie-card__bookmark">
                        <img src="{{url("images/icon-bookmark-empty.svg")}}" alt="Bookmark icon">
                    </div>
                    <div class="movie-card__play">
                        <img src="{{url("images/icon-play.svg")}}" alt="">
                        <span>Play</span>
                    </div>
                    <div class="movie-card__meta">
                        <div class="movie-card__info">
                            {{$movie->year}} &dot; Movies &dot; {{$movie->rating}}
                        </div>
                        <h2 class="movie-card__title">{{$movie->title}}</h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
