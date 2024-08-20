@extends('layouts.app')
@section('titulo', 'Exploring Peru Tours')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com/inicio">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com/inicio">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">

@endsection
@section('content')
    <div class="custom-carousel-container">
        <div class="custom-carousel-slide active"
            style="background-image: url('img/panoramico/machu-picchu-Exploring.webp');">
            <div class="custom-carousel-caption">
                <h3>¡Descúbrete en el Perú! </h3>
                <p>Paseos, gastronomía, sitios arqueológicos, reservas naturales, costumbres, tradiciones, paisajes y mucho
                    más...</p>
                <a href="{{ route('diarios') }}">Tours diarios</a>
                <a href="{{ route('cusco') }}">Paquetes en Cusco</a>
                <a href="{{ route('trek') }}">Trek & Aventura</a>
                <a href="{{ route('paquetes') }}">Paquetes en Perú</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
                @if (session('mail_sent'))
                    <div class="text-success" style="z-index:999; position: relative;">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Su mensaje fué enviado con éxito, le responderemos en la mayor brevedad posible.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="custom-carousel-slide" style="background-image: url('img/panoramico/huacachina-ica-peru-tour.webp');">
            <div class="custom-carousel-caption">
                <h3>Visita el Perú por 11 días </h3>
                <p>Lima - Paracas - Huacachina - Cusco - Puno</p>
                <a href="{{ url('/tour/recorre-el-peru-por-11-dias') }}">Ver tour</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="custom-carousel-slide" style="background-image: url('img/panoramico/ciudad-de-reyes-lima.webp');">
            <div class="custom-carousel-caption">
                <h3>Visita perú por 9 dias</h3>
                <p>Lima - Cusco - Puno</p>
                <a href="{{ url('/tour/lima-cusco-machupicchu-puno-9-dias') }}">Ver tour</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="custom-carousel-slide" style="background-image: url('img/panoramico/camino-inca-reserva.webp');">
            <div class="custom-carousel-caption">
                <h3>Camino Inca clásico</h3>
                <p>Camino Inca a Machu Picchu 4 días</p>
                <a href="{{ url('/tour/Camino-inca-clasico-4-dias') }}">Ver tour</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
        <button class="custom-carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="custom-carousel-button next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.custom-carousel-slide');

        function moveSlide(n) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function autoSlide() {
            moveSlide(1);
        }

        setInterval(autoSlide, 6000); // Cambia cada 5 segundos
    </script>

    <section>
        <div class="container" id="exploring">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Exploring Peru Tours</beige>
                    </h1>
                    <p>
                        <strong>Exploring Peru Tours</strong> es una agencia de viajes ubicada en
                        Cusco-Perú. Con una amplia experiencia en el ámbito del turismo. Tenemos un grupo profesional
                        calificado con servicios de alta calidad para que su estancia en nuestro país sea de su completa
                        satisfacción y felicidad. Desarrollamos un trabajo coordinado y bien organizado, para promover el
                        intercambio intercultural con respeto a nuestros clientes, su cultura y sus costumbres. Nos
                        caracterizamos por ofrecer todos nuestros servicios a precios realmente accesibles para nuestros
                        viajeros de acuerdo a sus necesidades y presupuestos.
                    </p>
                </div>

                <div class="col-lg-12">
                    <h2 class="mb-4 mt-4">Tours más preferidos por nuestros clientes:</h2>
                </div>

                <!-----Prueba--->
                @foreach ($tours->take(8) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', $tour->slug) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias" loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                {{-- <p class="text-card">{{ $tour->descripcion }}</p> --}}
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Diarios' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('diarios') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'machupicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Cusco' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('cusco') }}">{{ $mapi }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Caminatas' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('trek') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Perú' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('paquetes') }}"> {{ $luxury }}</a>
                                    @endif

                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            @if ($tour->dias == 1)
                                                {{ $tour->dias }} día
                                            @else
                                                {{ $tour->dias }} días
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left"><strong>{{ $tour->precio }}.00</strong>
                                        </span>
                                    </div>
                                    {{-- <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div> --}}
                                </div>
                                <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más detalles</a>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="space"></div>
            </div>
        </div>
    </section>

    <!-----Prueba full img------>
    <div class="full-img">
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Tours diarios</h5>
                <p>Excursiones diarias</p>
                <a href="{{ route('diarios') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Paquetes en Cusco</h5>
                <p>Tours en Cusco - Perú</p>
                <a href="{{ route('cusco') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card {{-- tres --}}uno">
            <div class="oscuro">
                <h5>Trek & Aventura</h5>
                <p>Tours de caminata en Perú</p>
                <a href="{{ route('trek') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card {{-- cuatro --}}dos">
            <div class="oscuro">
                <h5>Tours en Perú</h5>
                <p>Paquetes para conocer Perú</p>
                <a href="{{ route('paquetes') }}">Ver Tours</a>
            </div>
        </div>
    </div>
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12 mb-4">
                    <h2>Tours de Aventura:</h2>
                    <p>
                        Exploring Peru Tours es una agencia de viajes con bastante experiencia en viajes de aventura y
                        caminatas por las principales rutas turisticas que Perú tiene para ofrecer. Ya que los viajeros se
                        mueven a menudo a pie por las zonas rurales, el senderismo les brinda una vista de cerca de paisajes
                        increíbles durante su recorrido. El Camino Inca, que lleva a Machu Picchu, es una de las mejores
                        caminatas que existe en Sudamérica y debe ser una de tus opciones principales de senderismo.
                    </p>
                </div>
                @php
                    $count = 0; // Inicializa el contador antes del bucle
                @endphp
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'around'))
                        @php
                            $count++; // Incrementa el contador cuando se encuentra un tour con 'around' en la categoría
                        @endphp
                        @if ($count <= 4)
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-new" style="width: 18rem;">
                                    <a href="{{ route('tours.show', $tour->slug) }}">
                                        <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                            loading="lazy">
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $tour->nombre }}</h5>
                                        {{--  <p class="text-card">{{ $tour->descripcion }}</p> --}}
                                        <div class="enlacesCategoria">
                                            @if (Str::contains($tour->categoria, 'hikes'))
                                                <p style="display:none">
                                                    {{ $hike = 'Diarios' }}
                                                </p>
                                                <a class="enlaceHike" href="{{ route('diarios') }}">
                                                    {{ $hike }}</a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'machupicchu'))
                                                <p style="display:none">
                                                    {{ $mapi = 'Cusco' }}
                                                </p>
                                                <a class="enlaceMapi" href="{{ route('cusco') }}">{{ $mapi }}
                                                </a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'around'))
                                                <p style="display: none">
                                                    {{ $peru = 'Caminatas' }}
                                                </p>
                                                <a class="enlaceAround" href="{{ route('trek') }}">
                                                    {{ $peru }}
                                                </a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'luxury'))
                                                <p style="display:none">
                                                    {{ $luxury = 'Perú' }}
                                                </p>
                                                <a class="enlaceLuxury" href="{{ route('paquetes') }}">
                                                    {{ $luxury }}</a>
                                            @endif
                                        </div>

                                        <div class="row iconos-tours">
                                            <div class="col-6">
                                                <span class="icon-clock-o" style="float: right">
                                                    @if ($tour->dias == 1)
                                                        {{ $tour->dias }} día
                                                    @else
                                                        {{ $tour->dias }} días
                                                    @endif
                                                </span>
                                            </div>

                                            <div class="col-6">
                                                <span class="icon-usd"
                                                    style="float:left"><strong>{{ $tour->precio }}.00</strong></span>
                                            </div>
                                            {{-- <div class="col-12 pt-2">
                                                <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                            </div> --}}
                                        </div>
                                        <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más Info</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid background-section">
            <div class="backCaminoInca"></div>
            <div class="contenido">
                <h3>Reserva Camino Inca 2 días</h3>
                <p class="text-center text-white">"Considerado una de las mejores caminatas de toda sudamerica"</p>
                <a class="boton-card mt-2" href="{{url('tour/Camino-inca-2-dias-a-Machu-Picchu')}}">Ver tour</a>
            </div>
        </div>
    </section>
    <style>
        .background-section {
            background-image: url('../img/panoramico/qhapaq-nam-Camino-Inca.webp');
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
            text-align: center;
            padding: 50px 0;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .backCaminoInca {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
        }

        .contenido {
            position: relative;
            z-index: 1;
            padding: 15px 40px;
            background: #343434ad;
            border-radius: 5px;
        }
        .contenido h3{
            font-size: 30px;
        }
    </style>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-3">
                    <div class="col-lg-12 mb-3">
                        <h3 class="text-center mt-3">Lo que Exploring Peru Tours <template></template> ofrece:</h3>
                        <div class="linea mb-4 mt-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey; background:#fff">
                                <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">Asistencia amigable</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Estamos listos para atenderte las 24
                                    horas, los 7 días de la semana, ya sea vía WhatsApp, llamadas o correo electrónico y que
                                    tengas una grata experiencia.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey; background:#fff">
                                <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">Viajes flexibles</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Planificamos tu viaje en función de
                                    tus preferencias específicas, brindandote consejos útiles, basados en el conocimiento de
                                    primera mano del destino</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey; background:#fff">
                                <img src="{{ asset('img/thumb/small-groups.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">La calidad es nuestro objetivo</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Cumplimos con todos los estrictos
                                    estándares de calidad. Varias reseñas en TripAdvisor, Google y otros.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey;background:#fff">
                                <img src="{{ asset('img/thumb/food-on-trail.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">Comida en caminatas</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Deleite su paladar con nuestra
                                    deliciosa
                                    comida de sendero. Nos aseguramos de que tenga un sustento sabroso durante sus
                                    aventuras.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey; background:#fff">
                                <img src="{{ asset('img/thumb/legally-licensed.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">Licencia registrada</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Nuestra agencia de viajes en Perú
                                    cuenta con licencia y permisos en regla, brindando servicios turísticos confiables y de
                                    calidad.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center"
                                style="border:1px solid grey; background:#fff">
                                <img src="{{ asset('img/thumb/camping-equipment.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3 text-center">Equipo de campamento</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Ofrecemos una amplia selección de
                                    equipos de campamento de alta calidad para garantizar una experiencia cómoda y segura en
                                    la naturaleza.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3 mt-5">
                    <h2>VÍDEOS DE NUESTROS TESTIMONIOS </h2>
                </div>
                <div class="col-lg-3">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/jHk3DUUt8_M"
                        title="Raimbow mountain com Exploring Peru Tours By JULIUS" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/p_kKaYVLPzk"
                        title="Obrigado Jorge Barouch por confiar em o equipo de #Exploringperutours. ️" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/cJceKUkZDZg"
                        title="️Muchas gracias Wilfredo y Marta por confiar en nosotros" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/7aynOhnIwpU"
                        title="Exploring Peru Tours Travel agency Cusco Perú" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white pb-5">
        <div class="container-fluid bg-white mt-5">
            <div class="row">
                <div class="col-lg-12 mt-2 text-center">
                    <h3 class="text-center mt-5 mb-2">Estamos muy orgullosos de cuidar a nuestros clientes.
                    </h3>
                    <span class="mt-5">
                        <img class="mb-2" src="{{ asset('img/reviews/Exploring-trip-advisor.png') }}" width="180px"
                            alt="Trip Advisro Exploring Peru Tours">
                    </span>
                </div>
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active caruselExploringReviews">
                                <div class="card-wrapper container d-flex flex-wrap justify-content-center">
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-69.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong> Voyager54886360397</strong><br>
                                                        Ciudad de México, México2 aportes
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong> El viaje de mis sueños</strong><br>
                                                jul. de 2023 • Pareja<br>
                                                Excelente servicio, no tuvimos que preocuparnos por nada, todo estaba
                                                perfectamente reservado con el tiempo perfecto para disfrutar cada lugar sin
                                                prisa.
                                                Los traslados muy cómodos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-55.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong> André R</strong><br>
                                                        5 aportes
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Excelente agencia, puede confiar!</strong><br>
                                                ago. de 2023 • Familia<br>
                                                Cada recorrido que hicimos (montaña colorida, laguna humantay, city tour,
                                                valle sagrado, Machu Picchu y tour del Colcq) fue perfecto, muy bien
                                                organizado. Tuvimos toda la atención que necesitábamos, no fue necesario que
                                                nos preocuparamos con nada durante los tours. Gracias a Exploring Peru Tours
                                                y a Julius por hacer nuestra viaje un suceso.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-15.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong> Liliana H</strong><br>
                                                        1 aporte
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Confiable, trato excelente.</strong><br>
                                                ago. de 2023 • Pareja<br>
                                                La agencia es totalmente confiable, la comunicación fue magnífica Julius
                                                siempre al pendiente de lo que ocupáramos y los guías que nos tocaron en los
                                                Tours muy atentos también. Sin dudas recomiendo los servicios de esta
                                                agencia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-63.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong>Luciana Furuzawa</strong><br>
                                                        1 aporte
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong> Muy buen servicio</strong><br>
                                                jul. de 2023 • Pareja<br>
                                                Cada recorrido que hicimos fue perfecto. Tuvimos toda la atención que
                                                necesitábamos para llevar a cabo cada recorrido. ¡Nos encanta el servicio!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item caruselExploringReviews">
                                <div class="card-wrapper container d-flex flex-wrap justify-content-center">
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-9.jpg') }}"
                                                            alt="Tripadvisor Exploring Peru" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong>Noelia M</strong><br>
                                                        4 aportes
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Camino del inca..maravilloso!!</strong><br>
                                                jun. de 2023 • Solitario<br>
                                                Hice la excursión del camino del inca hace un mes con esta empresa y fue
                                                maravillosa la experiencia!! Organizacion, responsabilidad y compromiso,
                                                estuvieron en todos los detalles! Los super recomiendo!! Muchas gracias!!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-34.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong>Jorgelina M</strong><br>
                                                        2 aportes
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Excekente organización</strong><br>
                                                abr. de 2023<br>
                                                Nuestra experiencia fue excelente. Tres actividades realizamos con la
                                                empresa en Cuzco y todas fueron organizadas con responsabilidad y de acuerdo
                                                a lo pactado. Julio y su equipo nos acompañaron permanentemente durante las
                                                actividades , tanto en el transporte, coordinación, asesoramiento , etc.
                                                En Machu picchu, Elvis , nuestro guía fue un genio. Realmente nos transmitió
                                                ,no solamente todos sus conocimientos sobre el lugar, sino el amor por su
                                                tierra y su trabajo.
                                                Estamos sumamente agradecidas y recomendamos cobtactarse con Julio para
                                                conocer este increíble destino
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-39.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong>Mirta M</strong><br>
                                                        1 aporte
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Excelente Servicio</strong><br>
                                                abr. de 2023 • Amigos<br>
                                                Excelente servicio, atención y organización, cumplieron con todo lo
                                                acordado.
                                                Gracias a todo el equipo de Exploring Peru Tours, especialmente a Julio
                                                quien me asesoro y respondió todas las inquietudes y dudas previas y durante
                                                esta inolvidable experiencia en Cusco. Y a Elvis nuestro guía en Machu
                                                Picchu por brindarnos y trasmitirnos todo su conocimiento, con tanta
                                                dedicación y compromiso.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-2" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                    <div class="circuloImagen">
                                                        <img src="{{ asset('img/reviews/default-avatar-2020-5.jpg') }}"
                                                            alt="Avatar" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    <p style="font-size: 14px; margin-left:0.8em" class="text-left">
                                                        <strong>Lidia G</strong><br>
                                                        4 aportes
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-1">
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                                <i class="circuloTrip"></i>
                                            </p>
                                            <p>
                                                <strong>Fue maravilloso nuestro viaje</strong><br>
                                                abr. de 2023<br>
                                                La experiencia fue muy buena, tuvimos acompañamiento y asistencia al 100%
                                                del guía, dónde nos explico a detalle la historia de este sitio
                                                arqueológico.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fondo-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="mb-4" style="z-index: 40">
                    <h3 class="font-weight-bold text-center text-white">Contácte a Exploring Perú Tours</h3>
                    <p class="text-center w-responsive mx-auto mb-5 text-white">
                        Para diseñar experiencias de viaje verdaderamente inolvidables en Perú, necesita un equipo
                        especializado, capacitado y apasionado para que eso suceda una y otra vez. Aquí en EXPLORING PERU
                        TOURS tenemos precisamente eso, un grupo experto de personas donde su creatividad, conocimiento,
                        inspiración y amor por el Perú se transmite a través de cada viaje, encarnando la belleza pura del
                        viaje a lo largo del camino.
                    </p>
                </div>
                <div class="col-lg-12 mb-5">
                    <!--<form id="contact-form" name="contact-form" action="" method="POST" onsubmit="recargarPagina(event)">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nombre:" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Email:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Teléfono:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Nacionalidad:">
                                </div>
                            </div>

                            <div class="col-lg-6" style="display: none;">
                                <label for="my_name">Nombre:</label>
                                <input type="text" class="form-control form-control-sm" id="my_name" name="my_name" value="">
                            </div>
                            <script>
                                document.getElementById('contact-form').addEventListener('submit', function(event) {
                                    var honeypot = document.getElementById('my_name');
                                    honeypot.setAttribute('required', 'required');
                                });
                            </script>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adultos:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected>Opciones de viaje:</option>
                                        <option value="familia">Viaje en familia</option>
                                        <option value="pareja">Viaje en pareja</option>
                                        <option value="amigos">Con amigos</option>
                                        <option value="grupo">Viaje en grupo</option>
                                        <option value="privado">Viaje privado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escriba su consulta..." id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="text-center">
                                    <button class="boton-card" type="submit">Enviar</button>
                                </div>
                            </div>
                    </form>-->
					<form id="contact-form" name="contact-form" action="" method="POST" onsubmit="recargarPagina(event)">
    @csrf
    <div class="row formTransparent">
        <div class="col-md-6">
            <div class="md-form mb-4">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name:" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="md-form mb-4">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email:" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone:" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="text" id="country" name="country" class="form-control" placeholder="Country:">
            </div>
        </div>
        <div class="col-lg-6" style="display: none;">
            <label for="my_name">Nombre:</label>
            <input type="text" class="form-control form-control-sm" id="my_name" name="my_name" value="">
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <input type="number" id="adults" name="adults" class="form-control" placeholder="Adults:">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="md-form mb-4">
                <select name="tipo" id="tipo" class="form-control md">
                    <option selected>Travel options:</option>
                    <option value="familia">Family travel</option>
                    <option value="pareja">Travel as a couple</option>
                    <option value="amigos">With friends</option>
                    <option value="grupo">Group trip</option>
                    <option value="privado">Private trip</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="md-form">
                <textarea type="text" placeholder="Write your query..." id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="text-center">
                <button class="boton-card" type="submit">Send</button>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var honeypot = document.getElementById('my_name');
        honeypot.setAttribute('required', 'required');
        location.reload(); // Recarga la página
    });
</script>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <h3 class="text-center mt-2 mb-4">
                    Nuestros certificados
                </h3>
            </div>
            <div class="col-lg-7">
                <img src="{{ asset('img/Licencia-municipalidad.jpg') }}" width="100%" class="img-fluid" loading="lazy">
            </div>
            <div class="col-lg-5">
                <img src="{{ asset('img/DIRCETUR-certificado.jpg') }}" width="100%" class="img-fluid" loading="lazy">
            </div>
            <div class="col-lg-12 mt-5">
                <h3 class="text-center mt-2 mb-4">
                    Métodos de Pago
                </h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-7">
                    <img src="{{ asset('img/metodos-pago.png') }}" width="100%" class="img-fluid" loading='lazy'>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <h3 class="text-center mt-2 mb-4">
                    Nuestros colaboradores
                </h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-7">
                    <img src="{{ asset('img/Recursos-Peru-Travel.png') }}" width="100%" class="img-fluid" loading='lazy'>
                </div>
            </div>
        </div>
    </div>
@endsection
