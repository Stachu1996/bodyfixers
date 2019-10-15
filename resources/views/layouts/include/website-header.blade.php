<header class="container-fluid fixed-top bg-white">
    <nav id="navbar-website" class="navbar navbar-expand-lg navbar-light container fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Body Fixers">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav mr-auto nav-pills">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Strona główna <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#pakiety">Pakiety</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#cennik">Cennik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#faq">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-facebook-messenger"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <a href="{{ route('order.index') }}" class="btn btn-outline-success">Zamów</a>
        </div>
    </nav>
</header>
