<x-app-layout>
    {{--Search bar--}}
    <div class="search">
        <div class="search__icon">
            <img src="{{url("images/icon-search.svg")}}" alt="">
        </div>
        <input type="text"
               class="search__input"
               name="search" id="search"
               placeholder="Search for movies or TV series">
    </div>
    <div class="trending">
        <h2 class="trending__heading">Trending</h2>
        <div class="trending__carousel">
            @foreach($movies->where('is_trending') as $movie)
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
    <div class="recommended">
        <h2 class="heading-lg text-white mb-32">Recommended for you</h2>
        <div class="recommended__items">
            @foreach($movies->where("is_trending", 0) as $movie)
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url($movie->thumbnail_regular_medium)}}"
                         alt="Man on a rock in front of the water holding a camera.">
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
        </div>
    </div>
    </div>
</x-app-layout>
