<x-app-layout>
    <x-search-input placeholder="Search for {{\Illuminate\Support\Str::plural(strtolower($category->name))}}"></x-search-input>
    <x-content-section>
        <x-slot name="heading">
            {{\Illuminate\Support\Str::plural($category->name)}}
        </x-slot>

        <x-movie-display :movies="$category->movies"></x-movie-display>
    </x-content-section>
</x-app-layout>
