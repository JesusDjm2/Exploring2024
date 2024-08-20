@extends('layouts.appt')
@php $titulo="Encontre destinos para descobrir o Peru" @endphp
@php $descripcion="Perú tiene muchos lugares tur´siticos para conocer en su territorio, descubreos en esta sección." @endphp
@php $keywords="Camino inca, Machu Picchu tour, viajar a Peru, Conocer Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">@php
                    echo $titulo;
                @endphp</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mt-4">Peru como destino turístico</h2>
                    <i>Peru. País de tradições. País mestiço. país forte</i><br><br>
                    <p>O turismo no Peru está direcionado para monumentos arqueológicos, pois possui mais de cem mil sítios
                        de interesse, ecoturismo na Amazônia peruana, turismo cultural em cidades coloniais, turismo
                        gastronômico, turismo de aventura e turismo de praia.<br><br>
                        Segundo estudo do governo peruano, o índice de satisfação dos turistas após visitar o Peru é de 94%.
                        É a indústria que mais cresce no Peru
                    </p>
                    <h3>Quer saber por que visitar o Peru?</h3>
                    <p>
                        A resposta é simples e complexa, como o próprio Peru. Visitar o Peru é colocar você em contato com
                        uma cultura incrível, com pessoas capazes de lhe mostrar o melhor de si em qualquer circunstância,
                        com paisagens que geram emoções, com emoções que nunca são esquecidas. O Peru é rico porque sua
                        riqueza não está nas coisas materiais, mas está no sorriso de uma criança cusquenha, na ponta de um
                        garfo, nos pés na areia, no toque das folhas da selva, na brisa quando você chega ao topo daquela
                        montanha, com o calor no rosto quando o sol brilha na sua frente.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('cuscop') }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Ciudad del Cusco" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Cusco</h5>
                            <p class="text-card text-center">Umbigo do mundo</p>
                            <a href="{{ route('cuscop') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('Limap') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Ceviche peruano" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Lima</h5>
                            <p class="text-card text-center">A cidade dos reis</p>
                            <a href="{{ route('Limap') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('Arequipap') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa ciudad blanca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Arequipa</h5>
                            <p class="text-card text-center">A cidade branca</p>
                            <a href="{{ route('Arequipap') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('Punop') }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="lago Titicaca Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">Puno</h5>
                            <p class="text-card text-center">Capital do folclore</p>
                            <a href="{{ route('Punop') }}" class="boton-card">Ver destino</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
