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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
@yield('metas')


</head>

<body>
    <div class="btn-whatsapp">
        <a href="javascript:void(0);" onclick="showWhatsAppBox()">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp de Exploring Peru Tours" width="80%">
        </a>
    </div>
    <cajaWhatsApp id="whatsapp-box">
        <div class="WhatsAppheader">Envie su mensaje vía WhatsApp:</div>
        <button class="close-btn" onclick="hideWhatsAppBox()">×</button>
        <div class="input-container">
            <img src="{{ asset('img/logo-exploring-peru-tours-min.png') }}" width="190px" alt=""
                class="mx-auto mb-3 mt-3">
            <input type="text" id="message" class="message-input" placeholder="Ingrese su mensaje...">
            <button class="send-btn" onclick="sendMessage()">Enviar por WhatsApp <i class="icon-whatsapp"></i></button>
        </div>
    </cajaWhatsApp>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap" style="background: #343434">
        <div class="site-navbar-top" style="border: none!important">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6" style="color: #fff">
                        <div class="d-flex mr-auto">
                            <a class="align-items-center mr-4" href="mailto:info@exploringperutours.com">
                                <span class="icon-envelope mr-2 "></span>
                                <span class="d-none d-md-inline-block">info@exploringperutours.com</span>
                            </a>
                            <a class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+51 918 257 574</span>
                            </a>
                            <a href="{{ route('contactenos') }}" class="d-flex align-items-center" style="color: #fff">
                                <span class="icon-user mr-2"></span>
                                <span class="d-none d-md-inline-block">Contáctenos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto redes">
                            <a href="https://twitter.com/ExploringPT" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/exploringperutour/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.youtube.com/channel/UCyFbBEV2nxbo7Ze3vbHQ6Pg/featured" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                            <a href="https://www.instagram.com/exploring_perutours/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="https://www.tiktok.com/@exploringperutours" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="fab fa-tiktok"></span></a>
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
                            <img src="{{ asset('img/logo-exploring-peru-tours.png') }}"
                                alt="Logo Explorign Peru tours" class="logo">
                        </a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3" style="float: right"><a
                                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a href="{{ route('destinosPeru') }}" class="nav-link">Destinos</a>
                                        <ul class="dropdown arrow-top drownIdioma">
                                            <li> <a href="{{ route('destinoCusco') }}"> Cusco </a>
                                            </li>
                                            <li> <a href="{{ route('destinoLima') }}"> Lima </a>
                                            </li>
                                            <li> <a href="{{ route('destinoArequipa') }}"> Arequipa </a>
                                            </li>
                                            <li> <a href="{{ route('destinoPuno') }}"> Puno </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('diarios') }}" class="nav-link">Tours Diarios</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'hikes'))
                                                    <li>
                                                        <a href="{{ route('tours.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    día</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('cusco') }}" class="nav-link">Paquetes en Cusco</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias')->take(16) as $popit)
                                                @if (Str::contains($popit->categoria, 'machupicchu'))
                                                    <li>
                                                        <a href="{{ route('tours.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    días</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('trek') }}" class="nav-link">Trek & Aventura</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias') as $popit)
                                                @if (Str::contains($popit->categoria, 'around'))
                                                    <li>
                                                        <a href="{{ route('tours.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    {{ $popit->dias == 1 ? 'día' : 'días' }}</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('paquetes') }}" class="nav-link">Paquetes en Perú</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias')->take(16) as $popit)
                                                @if (Str::contains($popit->categoria, 'luxury'))
                                                    <li>
                                                        <a href="{{ route('tours.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    días</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('listado') }}" class="nav-link">Blog</a>
                                    </li>
                                    <li class="has-children">
                                        <button type="button" class="castellano-es" data-toggle="collapse"
                                            data-target="#collapseItem0" aria-expanded="false">Idioma</button>
                                        <ul class="dropdown arrow-top drownIdioma">
                                            @if (isset($relacion) && $relacion)
                                                <li>
                                                    <a href="{{ route('toursen.show', $relacion->slug) }}">English</a>
                                                </li>
                                            @elseif (isset($relacionBlogEn))
                                                <li>
                                                    <a href="{{ route('enblog', $relacionBlogEn->slug) }}">English</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('index') }}">English</a>
                                                </li>
                                            @endif
                                            @if (isset($relacionpt) && $relacionpt)
                                                <li>
                                                    <a
                                                        href="{{ route('tourspt.show', $relacionpt->slug) }}">Português</a>
                                                </li>
                                            @elseif (isset($relacionBlogPT))
                                                <li>
                                                    <a
                                                        href="{{ route('blogspt.show', $relacionBlogPT->slug) }}">Português</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('comecar') }}">Português</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col">
                                                <i class="icon-search botonsearch" data-toggle="modal"
                                                    data-target="#exampleModal"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
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
                        {{-- <a class="a-foot" href="{{ route('nosotros') }}"> Nosotros</a>
                        <a class="a-foot" href="{{ route('terminos') }}"> Terminos & Condiciones</a>
                        <a class="a-foot" href="{{ route('preguntas') }}"> Preguntas Frecuentes</a> --}}
                        {{-- <a class="a-foot" href=""> Comentarios</a> --}}
                        <p>
                            Para consultas, reservas o más información sobre nuestros tours, no dude en ponerse en
                            contacto. Nuestro equipo está listo para ayudarle con cualquier pregunta que pueda tener.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contacto</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                        <p><span class="icon-whatsapp"></span> +51 991 543 896</p>
                        <p><span class="icon-whatsapp"></span> +51 953 773 549</p>
                        <p><span class="icon-envelope"></span> info@exploringperutours.com</p>
                        <p><span class="icon-envelope"></span> operaciones@exploringperutours.com</p>
                        <p><span class="icon-map-marker"></span> Jiron 28 de julio Distrito de Santiago.</p>

                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Sociales</h4>
                        <div class="linea-foot"></div>
                        <div class="social-foot">
                            <a href="https://twitter.com/ExploringPT" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/exploringperutour/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/exploring_perutours/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d13202250-Reviews-Exploring_Peru_Tours-Cusco_Cusco_Region.html"
                                target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.tiktok.com/@exploringperutours" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="fab fa-tiktok"></span></a>
                            <a href="https://www.youtube.com/channel/UCyFbBEV2nxbo7Ze3vbHQ6Pg/featured"
                                rel="no-follow" target="_blank" class="p-2 pl-0"><span
                                    class="icon-youtube-play"></span></a>
                        </div>
                        <h5 class="text-center text-white mt-3">Creemos en la sostenibilidad</h5>
                        <p>
                            <i class="icon-recycle"></i> Todos nuestros tours son libres de plástico.<br>
                            Gestionamos nuestros residuos.
                        </p>
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
