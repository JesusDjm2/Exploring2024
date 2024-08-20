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
        <div class="WhatsAppheader">Send your message via WhatsApp:</div>
        <button class="close-btn" onclick="hideWhatsAppBox()">×</button>
        <div class="input-container">
            <img src="{{ asset('img/logo-exploring-peru-tours-min.png') }}" width="190px" alt=""
                class="mx-auto mb-3 mt-3">
            <input type="text" id="message" class="message-input" placeholder="Enter your message...">
            <button class="send-btn" onclick="sendMessage()">Send by WhatsApp <i class="icon-whatsapp"></i></button>
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
                                <span class="d-none d-md-inline-block text-white">
                                    info@exploringperutours.com
                                </span>
                            </a>
                            <a class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">+51 918 257 574</span>
                            </a>
                            <a href="{{ route('contact') }}" class="d-flex align-items-center" style="color: #fff">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Contact Us</span>
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
                        <a href="{{ route('index') }}">
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
                                        <a href="{{ route('destiniesPeru') }}" class="nav-link">Destinies</a>
                                        <ul class="dropdown arrow-top drownIdioma">
                                            <li> <a href="{{ route('destinyCusco') }}"> Cusco </a>
                                            </li>
                                            <li> <a href="{{ route('destinyLima') }}"> Lima </a>
                                            </li>
                                            <li> <a href="{{ route('destinyArequipa') }}"> Arequipa </a>
                                            </li>
                                            <li> <a href="{{ route('destinyPuno') }}"> Puno </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('hikes') }}" class="nav-link">Daily tours</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours as $popit)
                                                @if (Str::contains($popit->categoria, 'hikes'))
                                                    <li>
                                                        <a href="{{ route('toursen.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    day</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('mapien') }}" class="nav-link">Tours in Cusco</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias')->take(16) as $popit)
                                                @if (Str::contains($popit->categoria, 'machuPicchu'))
                                                    <li>
                                                        <a href="{{ route('toursen.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    days</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('around') }}" class="nav-link">Trek & Adventure</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias') as $popit)
                                                @if (Str::contains($popit->categoria, 'around'))
                                                    <li>
                                                        <a href="{{ route('toursen.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    {{ $popit->dias == 1 ? 'day' : 'days' }}</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('lodgen') }}" class="nav-link">Tours in Perú</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach ($tours->sortByDesc('dias')->take(16) as $popit)
                                                @if (Str::contains($popit->categoria, 'luxury'))
                                                    <li>
                                                        <a href="{{ route('toursen.show', $popit->slug) }}">
                                                            <strong>{{ $popit->nombre }}
                                                                <span style="color: #26b7e1">→ {{ $popit->dias }}
                                                                    days</span>
                                                            </strong>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('enlistado') }}" class="nav-link">Blog</a>
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
                                            @if (isset($relacion->tourPt) && $relacion->tourPt)
                                                <li>
                                                    <a href="{{ route('tourspt.show', $relacion->tourPt->slug) }}"
                                                        class="nav-link">Portugués</a>
                                                </li>
                                            @elseif ($relacionBlog && $relacionBlog->ptblogs)
                                                <li>
                                                    <a href="{{ route('blogspt.show', $relacionBlog->ptblogs->slug) }}"
                                                        class="nav-link">Portugués</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('comecar') }}" class="nav-link">Portugués</a>
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
                <form style="padding: 0px 25px" action="{{ route('searchen') }}" method="GET">
                    @csrf
                    <h3 class="h3-book-pop-up">Find your destination in Peru</h3>
                    <div class="form-row">
                        <div class="form-group col-12 text-center">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Search..." required>
                            <input type="submit" class="boton-index mt-2" value="Search">
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
                        <h4 class="h4-foot">Query</h4>
                        <div class="linea-foot"></div>
                        <p>
                            For inquiries, reservations or more information about our tours, please do not hesitate to
                            get in touch. Our team is ready to help you with any questions you may have.
                        </p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contact</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp"></span> +51 991 543 896</p>
                        <p><span class="icon-whatsapp"></span> +51 953 773 549</p>
                        <p><span class="icon-envelope"></span> info@exploringperutours.com</p>
                        <p><span class="icon-envelope"></span> operaciones@exploringperutours.com</p>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Social</h4>
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
                        <h5 class="text-center text-white mt-3">We believe in sustainability</h5>
                        <p>
                            <i class="icon-recycle"></i> All our tours are plastic free.<br>
                            We manage our waste.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <h5> Copiryght <?php echo date('Y'); ?> © All rights reserved | Exploring Peru Tours | Made by <a
                                href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank"
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
