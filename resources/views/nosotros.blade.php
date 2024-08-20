@extends('layouts.app')
@section('titulo', 'Exploring Perú Tours | Agencia de viajes a Perú')
@section('metas')
    <meta name="title" content="Sobre la agencia de viajes Exploring Peru Tours, viajes a Perú, reserva tu viaje a Perú" />
    <meta name="keywords"
        content="Exploring Peru Tours, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas" />
    <meta rel="canonical" content="{{ request()->fullUrl() }}">

    <meta name="og_image" content="{{ asset('img/logo-exploring-peru-tours.png') }}" />
    <meta name="og_secureImage" content="{{ asset('img/logo-exploring-peru-tours.png') }}" />

    <meta property="og:title"
        content="{Sobre la agencia de viajes Exploring Perú Tours, viajes a Perú, reserva tu viaje a Perú" />
    <meta property="og:description"
        content="Pacha Mama Spirit, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas" />
    <meta property="og:locale" content="es" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="robots" content="index,follow" />
@endsection
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Sobre Exploring Peru Tours</h1> <span></span>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-2" id="pachamama">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 text-center">
                    <img src="{{ asset('img/logo-exploring-peru-tours.png') }}" width="260px"
                        alt="Exploring Peru Tours logo" class="mb-4">
                    <p>
                        <strong>Exploring Perú Tours</strong> es una agencia de viajes ubicada en
                        Cusco-Perú. Con una amplia experiencia en el ámbito del turismo. Tenemos un grupo profesional
                        calificado con servicios de alta calidad para que su estancia en nuestro país sea de su completa
                        satisfacción y felicidad. Desarrollamos un trabajo coordinado y bien organizado, para promover el
                        intercambio intercultural con respeto a nuestros clientes, su cultura y sus costumbres. Nos
                        caracterizamos por ofrecer todos nuestros servicios a precios realmente accesibles para nuestros
                        viajeros de acuerdo a sus necesidades y presupuestos.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-6">
                    <h4 class="text-center">Misión</h4>
                    <p>
                        Nuestra misión como empresa “Exploring Perú Tours” y como profesionales en el turismo es hacer
                        realidad sus sueños de cada uno de nuestros clientes y brindarles más de lo que ellos esperan, todo
                        el servicio se proporciona en un entorno seguro, con servicios de primera calidad y alta eficiencia
                        que garantiza nuestra contribución al desarrollo de una conciencia turística y lleno de prosperidad.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-center">Misión</h4>
                    <p>
                        Ser una empresa líder en el mercado turístico dentro de nuestro país, expandiendo los destinos
                        turísticos como una empresa de más rápido y mejor crecimiento a nivel nacional. Ofrecemos un
                        servicio de alta calidad, con responsabilidad social. Capacitación permanente de nuestro personal y
                        de nuestra empresa.
                    </p>
                </div>
                <div class="col-lg-12 mt-4 mb-3">
                    <h3>Certificados & Licencias:</h3>
                </div>
                <div class="col-lg-6 mt-2 mb-2">
                    <img width="100%" src="{{asset('img/DIRCETUR-certificado.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 mt-2 mb-2">
                    <img width="100%" src="{{asset('img/Licencia-municipalidad.jpg')}}" alt="">
                </div>
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
    <!------End Fin Full img---------->

@endsection
