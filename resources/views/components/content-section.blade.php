<div class="section">
    @isset($heading)
        <x-section-heading>
            {{ $heading }}
        </x-section-heading>
    @endisset

    <div class="section__items">
        {{ $slot }}
    </div>
</div>
