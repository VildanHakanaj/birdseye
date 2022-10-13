<div class="search">
    <div class="search__icon">
        <img src="{{$icon ?? url("images/icon-search.svg")}}"
             alt="search icon">
    </div>
    <input type="text"
           class="search__input"
           name="search"
           id="search"
           placeholder="{{$placeholder ?? "Search for movies or TV series"}}">
</div>
