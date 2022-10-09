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
    {{--    <div class="trending">--}}
    {{--        <h2 class="trending__title">Trending</h2>--}}
    {{--        <div class="trending__carousel">--}}
    {{--            <div class="trending__item"></div>--}}
    {{--            <div class="trending__item"></div>--}}
    {{--            <div class="trending__item"></div>--}}
    {{--            <div class="trending__item"></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
