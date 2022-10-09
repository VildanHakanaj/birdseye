<x-app-layout>
    <x-slot name="sidebar">
        <div class="sidebar">
            <div class="sidebar__logo">
                <img src="{{ url("images/logo.svg") }}" alt="">
            </div>
            <ul class="sidebar__menu">
                <li class="sidebar__item">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-home.svg")}}"
                         alt=""></li>
                <li class="sidebar__item">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-movies.svg")}}"
                         alt=""></li>
                <li class="sidebar__item">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-tv-series.svg")}}"
                         alt=""></li>
                <li class="sidebar__item">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-bookmark.svg")}}"
                         alt="">
                </li>
            </ul>
            <div class="sidebar__avatar">
                <img src="{{url("images/image-avatar.png")}}" alt="">
            </div>
        </div>
    </x-slot>

    <input type="text" class="search">
    <h1>Trending</h1>
    <div>
        Test
    </div>

</x-app-layout>
