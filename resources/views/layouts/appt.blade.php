<!DOCTYPE html>
<html lang="En">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('titulo') </title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icon-exploring-peru.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" type="text/css" defer>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @yield('metas')
</head>

<body>
    <div class="btn-whatsapp">
        <a href="javascript:void(0);" onclick="showWhatsAppBox()">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp de Exploring Peru Tours" width="80%">
        </a>
    </div>
    <cajaWhatsApp id="whatsapp-box">
        <div class="WhatsAppheader">Envie sua mensagem pelo WhatsApp:</div>
        <button class="close-btn" onclick="hideWhatsAppBox()">×</button>
        <div class="input-container">
            <img src="{{ asset('img/logo-exploring-peru-tours-min.png') }}" width="190px" alt=""
                class="mx-auto mb-3 mt-3">
            <input type="text" id="message" class="message-input" placeholder="Digite sua mensagem...">
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
                                <span class="icon-envelope mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">info@exploringperutours.com</span>
                            </a>
                            <a class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">+51 918 257 574</span>
                            </a>
                            <a href="{{ route('contact') }}" class="d-flex align-items-center" style="color: #fff">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Contate-nos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto redes">
                            <a href="https://twitter.com/ExploringPT" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/exploringperutour/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/exploring_perutours/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="#" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.tiktok.com/@exploringperutours" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="fab fa-tiktok"></span></a>
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d13202250-Reviews-Exploring_Peru_Tours-Cusco_Cusco_Region.html"
                                rel="no-follow" target="_blank" class="p-2 pl-0"><span
                                    class="icon-youtube-play"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center row-menu">
                    <div class="col-2">
                        <a href="{{ route('comecar') }}">
                            <img src="{{ asset('img/logo-exploring-peru-tours.png') }}" alt="Exploring Peru Tours logo"
                                class="logo" title="Logo Explorign Peru tours">
                        </a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3" style="float: right">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                        <span class="icon-menu h3"></span>
                                    </a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a href="{{ route('destinosnoPeru') }}" class="nav-link">Destinos</a>
                                        <ul class="dropdown arrow-top drownIdioma">
                                            <li> <a href="{{ route('cuscop') }}"> Cusco </a>
                                            </li>
                                            <li> <a href="{{ route('Limap') }}"> Lima </a>
                                            </li>
                                            <li> <a href="{{ route('Arequipap') }}"> Arequipa </a>
                                            </li>
                                            <li> <a href="{{ route('Punop') }}"> Puno </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('diariosp') }}" class="nav-link">Passeios diários</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'caminata'))
                                                    <li>
                                                        <a href="{{ route('tourspt.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    dia</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('cuscop') }}" class="nav-link">Passeios em Cusco</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'machuPicchu'))
                                                    <li>
                                                        <a href="{{ route('tourspt.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    dia</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('trekp') }}" class="nav-link">Caminhada e aventura</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'around'))
                                                    <li>
                                                        <a href="{{ route('tourspt.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    dia</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('paquetesp') }}" class="nav-link">Passeios no Peru</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'luxury'))
                                                    <li>
                                                        <a href="{{ route('tourspt.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    dia</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('ptlistado') }}" class="nav-link">Blog</a>
                                    </li>
                                    <li class="has-children">
                                        <button type="button" class="castellano-es" data-toggle="collapse"
                                            data-target="#collapseItem1" aria-expanded="false"><i
                                                class="icon-language"></i> Language</button>
                                        <ul class="dropdown arrow-top drownIdioma">
                                            @if (isset($relacion) && $relacion)
                                                <li>
                                                    <a href="{{ route('tours.show', $relacion->slug) }}">Español</a>
                                                </li>
                                            @elseif ($relacionBlog)
                                                <li>
                                                    <a
                                                        href="{{ route('blog.show', $relacionBlog->slug) }}">Español</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('inicio') }}">Español</a>
                                                </li>
                                            @endif
                                            @if (isset($relacion->tourEn))
                                                <li>
                                                    <a href="{{ route('toursen.show', $relacion->tourEn->slug) }}"
                                                        class="nav-link">English</a>
                                                </li>
                                            @elseif ($relacionBlog && $relacionBlog->enblogs)
                                                <li>
                                                    <a
                                                        href="{{ route('enblog', $relacionBlog->enblogs->slug) }}">English</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('index') }}" class="nav-link">English</a>
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
    {{-- </main> --}}
    {{-- </div> --}}
    <!-- JavaScript Bundle with Popper -->
    <!-- Modal de banner-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1em">
                <form style="padding: 0px 25px" action="{{ route('searchpt') }}" method="GET">
                    @csrf
                    <h3 class="h3-book-pop-up">Encontre seu destino no Peru</h3>
                    <div class="form-row">
                        <div class="form-group col-12 text-center">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Procurar..." required>
                            <input type="submit" class="boton-index mt-2" value="Procurar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal de banner-->

    <section>
        <div class="display-foot">
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" alt="Paisaje Pacha Mama cerros silueta"
                width="100%" loading="lazy">
        </div>
        <div class="display-foot-2">
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}"
                title="Paisaje cerros sombra viajes min" alt="Paisaje Pacha Mama cerros silueta" width="100%"
                loading="lazy">
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Consulta</h4>
                        <div class="linea-foot"></div>
                        <p>
                            Para dúvidas, reservas ou mais informações sobre nossos passeios, não hesite em entrar em
                            contato. Nossa equipe está pronta para ajudá-lo com qualquer dúvida que você possa ter.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contato</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp"></span> +51 991 543 896 | +51 953 773 549</p>
                        <p><span class="icon-envelope"></span> info@exploringperutours.com</p>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Social</h4>
                        <div class="linea-foot"></div>
                        <div class="text-center social-foot">
                            <a href="https://twitter.com/PachaSpirit" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.pinterest.com/spiritpachamama/_saved/" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-pinterest"></span></a>
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="#" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.tiktok.com/@exploringperutours" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="fab fa-tiktok"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                        </div>
                        <h5 class="text-center text-white mt-3">Acreditamos na sustentabilidade</h5>
                        <p>
                            <i class="icon-recycle"></i> Todos os nossos passeios não contêm plástico.<br>
                            Gerenciamos nossos resíduos.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <h5> Copyright &copy; {{ date('Y') }} Todos os direitos reservados | Exploring Peru Tours |
                            Feito por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank"
                                rel="no-follow"> DJM2</a></h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script>
        const imagenes = document.querySelectorAll('img');
        imagenes.forEach((imagen) => {
            if (!imagen.hasAttribute('loading')) {
                imagen.setAttribute('loading', 'lazy');
            }
        });
    </script>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
