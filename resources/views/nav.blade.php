<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <span><i class="fas fa-paw"></i></span>
        </a>

        <!-- Navigation -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if (Route::currentRouteName() === 'home') active @endif">
                    <a class="nav-link" href="/">
                        <b>Home</b>
                    </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() === 'cats') active @endif">
                    <a class="nav-link" href="{{ route('cats') }}">
                        <b>Cats</b>
                    </a>
                </li>
                <li class="nav-item @if (Route::currentRouteName() === 'dogs') active @endif">
                    <a class="nav-link" href="{{ route('dogs') }}">
                        <b>Dogs</b>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.petfinder.com/" target="_blank">
                        <b>Pet Adoption</b>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
