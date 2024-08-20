@extends('layouts.app')
@php $titulo="Lima, ciudad de reyes - Pacha Mama Spirit" @endphp
@php $descripcion="Lima es la caital de la republica del Perú. Esta ubicada en la costa central del país." @endphp
@php $keywords="Lima, ciudad de los reyes, Lima capital de Perú" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/ciudad-de-reyes-lima.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="lima">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Lima, Ciudad de reyes</h1>
            </div>
        </div>
    </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a
                                    href="{{ route('destinosPeru') }}">Destinos</a> / <a>Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="mb-3">Destinos en Lima:</h2>
                    <div class="row">
                        @foreach ($tours as $tour)
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-new" style="width: 18rem;">
                                    <a href="{{ route('tours.show', $tour->slug) }}">
                                        <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                            loading="lazy">
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
                                                    style="float:left"><strong>{{ $tour->precio }}.00</strong>
                                                </span>
                                            </div>
                                            <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                        </div>
                                        <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más
                                            detalles</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
