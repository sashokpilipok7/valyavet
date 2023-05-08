<form method="get" action="{{route('search')}}">
    <style>
        .header__search {
            display: flex;
            align-items: flex-start;
        }
        .header__search button{
            margin-top: 4px;
            padding: 0;
            border: 0;
        }
    </style>
    <div class="header__col">
      <div class="header__search">

        <input name="q" id="query" type="text" class="header__input" placeholder="Поиск" />

        <button type="submit">
            <img id="search" src="../../img/search.svg" alt="" class="header__searchIcon" />
        </button>

        </div>
    </div>
</form>
