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
                <div class="movie-card movie-card--large">
                    <img class="movie-card__image" src="{{url("images/thumbnails/beyond-earth/trending/large.jpg")}}"
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
                                2019 &dot; Movies &dot; PG
                            </div>
                            <h2 class="movie-card__title">Beyond Earth</h2>
                        </div>
                    </div>

                </div>
                <div class="movie-card movie-card--large">
                    <img class="movie-card__image" src="{{url("images/thumbnails/bottom-gear/trending/large.jpg")}}"
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
                                2021 &dot; Movies &dot; PG
                            </div>
                            <h2 class="movie-card__title">Bottom Gear</h2>
                        </div>
                    </div>

                </div>
                <div class="movie-card movie-card--large">
                    <img class="movie-card__image" src="{{url("images/thumbnails/undiscovered-cities/trending/large.jpg")}}"
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
                                2019 &dot; Tv Series &dot; E
                            </div>
                            <h2 class="movie-card__title">Undiscovered Cities</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="recommended">
        <h2 class="heading-lg text-white mb-32">Recommended for you</h2>
        <div class="recommended__items">
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>
            <div class="card">
                <div class="movie-card movie-card--small">
                    <img class="movie-card__image" src="{{url("images/thumbnails/the-great-lands/regular/small.jpg")}}"
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
                        2019 &dot; Tv Series &dot; E
                    </div>
                    <h2 class="text-white heading-xs">Undiscovered Cities</h2>
                </div>

            </div>

        </div>
        </div>
    </div>
</x-app-layout>
