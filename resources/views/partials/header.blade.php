<header>
    <nav class="container navbar navbar-expand-lg">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="..." />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse list-inline" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto fw-bold">
                @foreach ($menuItems as $item)
                <li <?php if (strtolower($item) == substr($_SERVER['REQUEST_URI'], 1)) echo 'class="active"' ?>> <a href="#">{{$item}}</a> </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>