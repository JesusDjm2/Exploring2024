<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('titulo') Exploring Peru Tours</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icon-exploring-peru.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" defer type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    @yield('metas')

</head>

<body>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsaApp de Pacha Mama Spirit" width="80%">
        </a>
    </div>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a class="align-items-center mr-4">
                                <span class="icon-envelope mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">info@exploringperutours.com</span>
                            </a>
                            <a class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">+51 991 543 896</span>
                            </a>
                            <a href="{{ route('contactenos') }}" class="d-flex align-items-center">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Contáctenos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="https://twitter.com/ExploringPT" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/exploringperutour/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.youtube.com/channel/UCyFbBEV2nxbo7Ze3vbHQ6Pg/featured" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                            <a href="https://www.instagram.com/exploring_perutours/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d13202250-Reviews-Exploring_Peru_Tours-Cusco_Cusco_Region.html"
                                target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center row-menu">
                    <div class="col-2">
                        <a href="{{ route('inicio') }}">
                            <img src="{{ asset('img/logo-exploring-peru-tours.png') }}" alt="Logo Explorign Peru tours"
                                class="logo">
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Login') }}</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                                        autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="row mb-3">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                            {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                    
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Olvidaste tu contraseña?') }}
                                                        </a>
                                                    @endif
                                                    {{-- <a class="btn btn-info" href="{{ __('register') }}">
                                                        Registrarse
                                                    </a> --}}
                                                </div>
                                            </div>
                    
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------Fin formulario ---------->
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1em">
                <form style="padding: 0px 25px" action="{{ route('search') }}" method="GET">
                    @csrf
                    <h3 class="h3-book-pop-up">Encuentra tu destino en Perú</h3>
                    <div class="form-row">
                        <div class="form-group col-12 text-center">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Buscar..." required>
                            <input type="submit" class="boton-index mt-2" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal de banner-->
    <section>
        <div class="display-foot">
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" title="Paisaje cerros Perú"
                alt="Paisaje cerros silueta" width="100%" loading="lazy">
        </div>
        <div class="display-foot-2">
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}" title="Silueta paisajes Perú"
                alt="Paisaje cerros silueta" width="100%" loading="lazy">
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Consultas</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href="{{ route('nosotros') }}"> Nosotros</a>
                        <a class="a-foot" href="{{ route('terminos') }}"> Terminos & Condiciones</a>
                        <a class="a-foot" href="{{ route('preguntas') }}"> Preguntas Frecuentes</a>
                        {{-- <a class="a-foot" href=""> Comentarios</a> --}}
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contacto</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                        <p><span class="icon-whatsapp"></span> +51 991 543 896 | +51 953 773 549</p>
                        <p><span class="icon-envelope"></span> info@exploringperutours.com</p>

                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Sociales</h4>
                        <div class="linea-foot"></div>
                        <div class="text-center social-foot">
                            <a href="https://twitter.com/ExploringPT" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/exploringperutour/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/exploring_perutours/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d13202250-Reviews-Exploring_Peru_Tours-Cusco_Cusco_Region.html"
                                target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCyFbBEV2nxbo7Ze3vbHQ6Pg/featured"
                                rel="no-follow" target="_blank" class="p-2 pl-0"><span
                                    class="icon-youtube-play"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <h5> Copiryght <?php echo date('Y'); ?> © todos los derechos reservados | Exploring Peru Tours |
                            Hecho por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank"
                                rel="no-follow">
                                <strong> DJM2</strong></a>
                        </h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    {{-- <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>


