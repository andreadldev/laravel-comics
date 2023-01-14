<header>
    <nav class="container navbar navbar-expand-lg px-4 px-sm-0">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="..." />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse list-inline" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto fw-bold py-4 py-xs-0">
                @foreach ($navItems as $item)
                <li class="d-flex justify-content-center <?php if (strtolower($item) == substr($_SERVER['REQUEST_URI'], 1)) echo 'active'?>"> <a href="#">{{$item}}</a> </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>