<header>
    <nav class="container navbar navbar-expand-lg px-4 py-3 px-sm-0">
        <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="..." />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse list-inline" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto fw-bold py-xs-0">
                @foreach ($navItems as $item)
                <li class="d-flex justify-content-center mx-lg-2 mx-xl-3 fw-bold <?php if (strtolower($item) == substr($_SERVER['REQUEST_URI'], 1)) echo 'active'?>"> <a href="#">{{$item}}</a> </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>