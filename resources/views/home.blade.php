<x-app-layout>
    <x-search-input></x-search-input>
    <x-trending :movies="$movies->where('is_trending')"></x-trending>

    <x-content-section :movies="$movies">
        <x-slot name="heading">
            Recommended for you
        </x-slot>

        <x-movie-display :movies="$movies->where('is_trending', 0)"></x-movie-display>

    </x-content-section>

    <x-content-section :movies="$movies">
        <x-slot name="heading">
            Recommended for you
        </x-slot>

        <x-movie-display :movies="$movies->where('is_trending', 0)"></x-movie-display>

    </x-content-section>
</x-app-layout>
