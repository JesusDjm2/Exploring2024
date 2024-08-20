@extends('layouts.app')
@php $titulo="Encuentra los mejores destinos turísticos en Perú" @endphp
@php $descripcion="Perú tiene muchos lugares tur´siticos para conocer en su territorio, descubreos en esta sección." @endphp
@php $keywords="Camino inca, Machu Picchu tour, viajar a Peru, Conocer Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Encuentra destinos para conocer Perú</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mt-4">Perú como destino turístico</h2>
                    <i>Perú. País de tradiciones. País mestizo. País fuerte</i><br><br>
                    <p>
                        El turismo en el <a target="_blanck" rel="no-follow" class="enlaces-tours" href="">Perú</a> está
                        dirigida hacia los monumentos arqueológicos, pues cuenta con más de
                        cien mil sitios de interés, el ecoturismo en la Amazonía peruana, el turismo cultural en las
                        ciudades coloniales, turismo gastronómico, turismo de aventura y turismo de playa.<br><br>

                        De acuerdo con un estudio del gobierno peruano, el índice de satisfacción de los turistas
                        después de visitar el Perú es del 94%. Es la industria de más rápido crecimiento en el Perú
                    </p>
                    <h3>¿Quieres saber por qué visitar Perú?</h3>
                    <p>
                        La respuesta es sencilla y compleja, como el Perú mismo. Visitar Perú es ponerte en contacto con
                        una cultura asombrosa, con gente capaz de mostrarte lo mejor de sí misma en cualquier
                        circunstancia, con paisajes que generan emociones, con emociones que no se olvidan nunca. Perú
                        es rico porque su riqueza no está puesta en cosas materiales, sino que se halla en la sonrisa de
                        un niño cusqueño, en la punta de un tenedor, en tus pies sobre la arena, en el roce de unas
                        hojas en la selva, en la brisa al llegar a la cima de esa montaña, en el calor sobre tu rostro
                        cuando el sol te da de frente.
                    </p>                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinoCusco') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card text-center">Ombligo del mundo</p>
                            <a href="{{ route('destinoCusco') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinoLima') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card text-center">La ciudad de los reyes</p>
                            <a href="{{ route('destinoLima') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinoArequipa') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card text-center">La ciudad blanca</p>
                            <a href="{{ route('destinoArequipa') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('destinoPuno') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="lago Titicaca Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card text-center">Capital del folklore</p>
                            <a href="{{ route('destinoPuno') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                {{-- 
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('ciudad-de-ica') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                                alt="Ciudad de Ica, Nazca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Ica</h5>
                            <p class="text-card">La ciudad del eterno sol</p>
                            <a href="#" class="boton-card">Más detalles</a>
                        </div>
                    </div>
                </div>    --}}            
            </div>
        </div>
    </section>
@endsection
