@extends('layouts.appt')
@section('titulo', 'Eploring Peru Tours')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://exploringperutours.com">
    <meta name="description"
        content="Exploring Peru Tours It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:title" content="Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Exploring Peru Tours It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://exploringperutours.com">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="custom-carousel-container">
        <div class="custom-carousel-slide active"
            style="background-image: url('img/panoramico/Recorrido-Cusco-Machu-Picchu.webp');">
            <div class="custom-carousel-caption">
                <h3>Descubra-se no Peru! </h3>
                <p>Passeios, gastronomia, sítios arqueológicos, reservas naturais, costumes, tradições, paisagens e muito
                    mais...</p>
                <a href="{{ route('diariosp') }}">Passeios diários</a>
                <a href="{{ route('cuscop') }}">Pacotes em Cusco</a>
                <a href="{{ route('trekp') }}">Trilha e aventura</a>
                <a href="{{ route('paquetesp') }}">Pacotes no Peru</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
                @if (session('mail_sent'))
                    <div class="text-success" style="z-index:999; position: relative;">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Sua mensagem foi enviada com sucesso, responderemos o mais breve possível.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="custom-carousel-slide"
            style="background-image: url('img/panoramico/los-mejores-destinos-para-peru.webp');">
            <div class="custom-carousel-caption">
                <h3>Veja pacotes pelo Peru</h3>
                <p>Apresentamos nossos pacotes para conhecer esse lindo país.</p>
                <a href="{{ route('paquetesp') }}">Ver passeios</a>
                <a class="botonAbajo" href="#exploring">
                    <div class="circulo">
                        <i class="icon-chevron-down desvanecer"></i>
                        <i class="icon-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="custom-carousel-slide" style="background-image: url('img/panoramico/caminatas-trekking-peru.webp');">
            <div class="custom-carousel-caption">
                <h3>Visite nosso Blog</h3>
                <p>Encontre informações valiosas sobre viagens, dicas e tópicos culturais gerais sobre o Peru.</p>
                <a href="#">Ver blogs</a>
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

        setInterval(autoSlide, 5000); // Cambia cada 5 segundos
    </script>
    <section>
        <div class="container" id="exploring">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Exploring Peru Tours</beige>
                    </h1>
                    <p>
                        <strong>Exploring Peru Tours</strong> é uma agência de viagens peruana nascida em Cusco, conhecida
                        como o umbigo do mundo, a antiga capital do <strong>império Inca</strong>. Nossa equipe desenvolveu
                        uma lista de passeios que permite ao visitante aproveitar o que o Peru tem de melhor como aventura,
                        cultura, caminhadas, história, gastronomia, exclusividade e uma equipe Exploring Peru Tours, que ama o
                        <strong>Peru</strong> e tudo o que ela nos oferece. O Peru possui uma das biodiversidades mais ricas
                        do mundo, graças à cordilheira dos Andes, que atravessa o país formando costas, montanhas e selva em
                        seu caminho, e com cada região natural traz consigo outra quantidade considerável de microclimas.
                        Isso faz do Peru um país rico em diversidade de produtos naturais, paisagens únicas e uma extensa
                        gastronomia, entre outros.<br><br>
                        O Peru também foi o principal local do Tahuantinsuyo, erguido pelos Incas, a maior e mais
                        desenvolvida cultura da América do Sul. Esses homens construíram fortalezas feitas de pedras
                        gigantescas, que endureceram com o tempo e hoje fazem parte dos dias atuais, conservando sua
                        grandeza. Desta forma, o Peru se torna um país que tem muito a oferecer aos seus visitantes.
                    </p>
                </div>

                <div class="space"></div>
                <div class="col-lg-12 mb-4">
                    <h2>Passeios recomendados:</h2>
                </div>

                <!-----Prueba--->
                @foreach ($tours->take(8) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Inca trail 4 days" loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'caminata'))
                                        <p style="display:none">
                                            {{ $hike = 'Diários' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('diariosp') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'machuPicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Cusco' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('cuscop') }}">{{ $mapi }}
                                        </a>
                                    @endif

                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Aventura' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('trekp') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Perú' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('paquetesp') }}">
                                            {{ $luxury }}</a>
                                    @endif
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right"> {{ $tour->dias }}
                                            dias</span>
                                    </div>

                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left"><strong>
                                                {{ $tour->precio }}.00</strong></span>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}" class="boton-card">Mais
                                    info</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-----Fin orueba--->
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img">
         <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Passeios diários</h5>
                <p>Excursões diárias</p>
                <a href="{{ route('diariosp') }}">Ver passeios</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Pacotes em Cusco</h5>
 <p>Passeios em Cusco - Peru</p>
                <a href="{{ route('cuscop') }}">Ver passeios</a>
            </div>
        </div>
        <div class="full-img-card {{-- tres --}}uno">
            <div class="oscuro">
                <h5>Trilha e Aventura</h5>
 <p>Passeios a pé no Peru</p>
                <a href="{{ route('trekp') }}">Ver passeios</a>
            </div>
        </div>
        <div class="full-img-card {{-- cuatro --}}dos">
            <div class="oscuro">
                <h5>Passeios no Peru</h5>
 <p>Pacotes para descobrir o Peru</p>
                <a href="{{ route('paquetesp') }}">Ver passeios</a>
            </div>
        </div>
    </div>
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2>Peru Adventure:</h2>
                    <p>
                        A <strong> Exploring Peru Tours</strong> é uma agência de viagens com muita experiência em viagens
                        de aventura e
                        caminhadas pelos principais roteiros turísticos que o Peru tem a oferecer. Como os viajantes
                        costumam se deslocar pelas áreas rurais a pé, as caminhadas proporcionam uma visão de perto de
                        paisagens incríveis durante a viagem. A Trilha Inca, que leva a Machu Picchu, é uma das melhores
                        caminhadas da América do Sul e deve ser uma das suas principais opções de caminhada.
                    </p>
                </div>
                <div class="space"></div>
                @php
                    $count = 0;
                @endphp
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'around'))
                        @php
                            $count++; // Incrementa el contador cuando se encuentra un tour con 'around' en la categoría
                        @endphp
                        @if ($count <= 4)
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-new" style="width: 18rem;">
                                    <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}">
                                        <img class="card-img-top" src="{{ $tour->img }}" alt="Inca trail 4 days"
                                            loading="lazy">
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $tour->nombre }}</h5>
                                        <p class="text-card">{{ $tour->descripcion }}</p>
                                        <div class="enlacesCategoria">
                                            @if (Str::contains($tour->categoria, 'caminata'))
                                                <p style="display:none">
                                                    {{ $hike = 'Diários' }}
                                                </p>
                                                <a class="enlaceHike" href="{{ route('diariosp') }}">
                                                    {{ $hike }}</a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'machuPicchu'))
                                                <p style="display:none">
                                                    {{ $mapi = 'Cusco' }}
                                                </p>
                                                <a class="enlaceMapi" href="{{ route('cuscop') }}">{{ $mapi }}
                                                </a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'around'))
                                                <p style="display: none">
                                                    {{ $peru = 'Aventura' }}
                                                </p>
                                                <a class="enlaceAround" href="{{ route('trekp') }}">
                                                    {{ $peru }}
                                                </a>
                                            @endif
                                            @if (Str::contains($tour->categoria, 'luxury'))
                                                <p style="display:none">
                                                    {{ $luxury = 'Perú' }}
                                                </p>
                                                <a class="enlaceLuxury" href="{{ route('paquetesp') }}">
                                                    {{ $luxury }}</a>
                                            @endif
                                        </div>
                                        <div class="row iconos-tours">
                                            <div class="col-6">
                                                <span class="icon-clock-o" style="float: right"> {{ $tour->dias }}
                                                    dias</span>
                                            </div>

                                            <div class="col-6">
                                                <span class="icon-usd" style="float:left"><strong>
                                                        {{ $tour->precio }}.00</strong></span>
                                            </div>
                                            <div class="col-12 pt-2">
                                                <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}"
                                            class="boton-card">Mais info</a>
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
                <h3>Reserva Caminho Inca 2 dias</h3>
                <p class="text-center text-white">“Considerada uma das melhores caminhadas de toda a América do Sul”</p>
                <a class="boton-card mt-2" href="{{ url('tour-pt/Trilha-Inca-2-dias-1-noite') }}">Ver passeio</a>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 mt-3">
                <h3 class="text-center">O que a Exploring Peru Tours oferece aos seus clientes</h3>
                <div class="linea mb-4 mt-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" height="100px"
                            alt="Local Tour guide" loading="lazy">
                        <p class="font-weight-bold mt-3 text-center">Guia turístico local</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Guias locais especialistas e
                            conhecedores da riqueza do passado da cultura Inca.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" height="100px"
                            alt="Local Tour guide" loading="lazy">
                        <p class="font-weight-bold mt-3 text-center">Turismo sustentável</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Temos orgulho de oferecer experiências
                            que combinam o natural com práticas responsáveis que respeitam o meio ambiente e as
                            comunidades locais.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/small-groups.png') }}" height="100px" alt="Local Tour guide"
                            loading="lazy">
                        <p class="font-weight-bold mt-3 text-center">Pequenos grupos</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Você passa mais tempo com o guia e
                            ouve
                            tudo o que ele tem a dizer. Um passeio personalizado.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/food-on-trail.png') }}" height="100px" alt="Local Tour guide"
                            loading="lazy">
                        <p class="font-weight-bold mt-3 text-center">Comida na trilha</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Delicie seu paladar com nossa
                            deliciosa comida de trilha. Garantimos que você tenha um sustento saboroso durante suas
                            aventuras.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/legally-licensed.png') }}" height="100px" alt="Local Tour guide"
                            loading="lazy">
                        <p class="font-weight-bold mt-3 text-center">Legalmente licenciado</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Nossa agência de viagens no Peru
                            possui licenças e autorizações em ordem, oferecendo serviços turísticos de qualidade e
                            confiáveis.</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="pt-4 d-flex flex-column align-items-center" style="border:1px solid grey">
                        <img src="{{ asset('img/thumb/camping-equipment.png') }}" height="100px" alt="Local Tour guide"
                            loading="lazy">
                        <p class="font-weight-bold mt-3">Equipamento de acampamento</p>
                        <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                        <p class="text-justify m-3" style="font-size: 14px">Oferecemos uma ampla seleção de
                            equipamentos de camping de alta qualidade para garantir uma experiência confortável e
                            segura na natureza.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 mt-4">
                <h2>VÍDEOS DE NUESTROS TOURS MAS POPULARES </h2>
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
    </div>
    <section>
        <div class="container-fluid bg-white mt-5 mb-2 pb-5">
            <div class="row">
                <div class="col-lg-12 mb-3 mt-2 text-center">
                    <h3 class="text-center mt-5 mb-2">Temos muito orgulho em cuidar de nossos clientes.
                    </h3>
                    <span class="mt-5 mb-5">
                        <img class="mb-2" src="{{ asset('img/reviews/Exploring-trip-advisor.png') }}" width="180px"
                            alt="Trip Advisro Exploring Peru Tours">
                    </span>
                </div>
                <div class="col-lg-12">
                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active caruselExploringReviews">
                                <div class="card-wrapper container d-flex flex-wrap justify-content-center">
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
                                    <div class="card m-2" style="width: 18rem;">
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
    </section>
    <section class="fondo-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="mb-4" style="z-index: 40">
                    <h3 class="font-weight-bold text-center text-white">Contato Explorando Peru Tours</h3>
                    <p class="text-center w-responsive mx-auto mb-5 text-white">
                        Para criar experiências de viagem verdadeiramente inesquecíveis no Peru, você precisa de uma equipe
                        dedicada, qualificada e apaixonada para fazer isso acontecer sempre. Aqui na EXPLORING PERU TOURS
                        temos exatamente isso, um grupo de especialistas onde sua criatividade, conhecimento, inspiração e
                        amor pelo Peru são transmitidos em cada viagem, incorporando a pura beleza da viagem ao longo do
                        caminho.
                    </p>
                </div>
                <div class="col-lg-12 mb-5">
                    <!--<form id="contact-form" name="contact-form" action="" method="POST" onsubmit="recargarPagina(event)">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nome:" required>
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
                                        placeholder="Telefone:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Nacionalidade:">
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
                                        <option selected>Opções de viagem:</option>
                                        <option value="familia">Viagem em família</option>
                                        <option value="pareja">Viaje em casal</option>
                                        <option value="amigos">Com amigos</option>
                                        <option value="grupo">Viagem em grupo</option>
                                        <option value="privado">Viagem privada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escreva sua consulta..." id="message" name="message" rows="2"
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
                <img src="{{ asset('img/Licencia-municipalidad.jpg') }}" width="100%" class="img-fluid"
                    loading="lazy">
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
                    <img src="{{ asset('img/Recursos-Peru-Travel.png') }}" width="100%" class="img-fluid"
                        loading='lazy'>
                </div>
            </div>
        </div>
    </div>
@endsection
