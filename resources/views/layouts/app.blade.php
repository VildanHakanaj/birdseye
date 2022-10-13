<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{mix("css/app.css")}}">
</head>
<body>
<div class="wrapper sidebar-layout">
    <div class="sidebar">
        <div class="sidebar__logo">
            <img src="{{ url("images/logo.svg") }}" alt="">
        </div>
        <ul class="sidebar__menu">
            <li class="sidebar__item">
                <a href="/">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-home.svg")}}"
                         alt="">

                </a>
            </li>
            <li class="sidebar__item">
                <a href="/movie">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-movies.svg")}}"
                         alt="">
                </a>
            </li>
            <li class="sidebar__item">
                <a href="/tv-series">
                    <img class="sidebar__icon"
                         src="{{url("images/icon-nav-tv-series.svg")}}"
                         alt="">
                </a>
            </li>
            @auth
                <li class="sidebar__item">
                    <a href="/my-bookmarks">
                        <img class="sidebar__icon"
                             src="{{url("images/icon-nav-bookmark.svg")}}"
                             alt="">
                    </a>
                </li>
            @endauth
        </ul>
        <div class="sidebar__avatar">
            <img src="{{url("images/image-avatar.png")}}" alt="">
        </div>
    </div>
    <main>
        {{ $slot }}
    </main>
</div>

<script src="{{mix("js/app.js")}}"></script>
</body>
</html>
