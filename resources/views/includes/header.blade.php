<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DC Comics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link @if (request()->routeIs('home')) active" @endif  aria-current="page"
                    href="{{ route('home') }}">Home</a>
                <a class="nav-link @if (request()->routeIs('comics.index')) active @endif"
                    href="{{ route('comics.index') }}">Comics</a>
            </div>
        </div>
    </div>
</nav>
