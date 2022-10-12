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
                <div class="trending__item">
                    <img class="trending__image" src="{{url("images/thumbnails/beyond-earth/trending/large.jpg")}}"
                         alt="Man on a rock in front of the water holding a camera.">
                    <div class="trending__overlay">
                        <div class="trending__bookmark">
                            <img src="{{url("images/icon-bookmark-empty.svg")}}" alt="Bookmark icon">
                        </div>
                        <div class="trending__play">
                            <img src="{{url("images/icon-play.svg")}}" alt="">
                            <span>Play</span>
                        </div>
                        <div class="trending__meta">
                            <div class="trending__info">
                                2019 &dot; Movies &dot; PG
                            </div>
                            <h2 class="trending__title">Beyond Earth</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</x-app-layout>
