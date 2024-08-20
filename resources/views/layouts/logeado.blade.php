<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> <i class="icon-menu"></i>
        </button>
        <form action="#" class="searchform order-lg-last">
            @guest
                @if (Route::has('login'))
                    <div class="form-group d-flex" style="color: #fff">
                        <a class="btn btn-danger float-end mr-5" style="font-size: 12px">
                            Ingresar al sistema
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <a href="{{ route('index') }}" class="nav-link">
                        <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="220px"
                            alt="Pacha Mama Spirit logo">
                    </a>
                    <div class="collapse navbar-collapse menupacha" id="ftco-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                            </li>
                            {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Page</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#">Tours en Ingles</a>
                        <a class="dropdown-item" href="#">Tours en español</a>
                        <a class="dropdown-item" href="#">Usuarios</a>
                        <a class="dropdown-item" href="#">Page 4</a>
                    </div> </li> --}}
                            <li class="nav-item"><a href="{{ url('toursen') }}" class="nav-link">English tours</a></li>
                            <li class="nav-item"><a href="{{ url('tours') }}" class="nav-link">Tours en español</a></li>
                            <li class="nav-item"><a href="{{ url('imagenes') }}" class="nav-link">Imagenes</a></li>
                            <li class="nav-item"><a href="{{ url('users') }}" class="nav-link">Usuarios</a></li>
                        </ul>
                    </div>
                @endif
            @else
                <div class="form-group d-flex">
                    <li style="color: #fff; list-style:none; margin-right:2em; margin-top:0.8em" class="nav-list dropdown">
                        <a href="" style="color: #fff; margin-right:1em">
                            {{ Auth::user()->name }}
                        </a>
                        <a class="btn btn-danger btn-sm float-end mr-5" style="font-size: 12px" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>


                </div>
                <a href="{{ route('index') }}" class="nav-link">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="220px" alt="Pacha Mama Spirit logo">
                </a>
                <div class="collapse navbar-collapse menupacha" id="ftco-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        </li>
                        <li class="nav-item"><a href="{{ url('toursen') }}" class="nav-link">English tours</a></li>
                        <li class="nav-item"><a href="{{ url('tours') }}" class="nav-link">Tours en español</a></li>
                        <li class="nav-item"><a href="{{ url('imagenes') }}" class="nav-link">Imágenes</a></li>
                        <li class="nav-item"><a href="{{ url('users') }}" class="nav-link">Usuarios</a></li>
                    </ul>
                </div>

            @endguest
        </form>
    </div>
</nav>
