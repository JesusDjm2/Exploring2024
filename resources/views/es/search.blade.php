@extends('layouts.app')
@section('content')
    <div class="mirador-condor">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Resultados de su búsqueda</h1>
                    <p class="text-white text-center">Buscado en: <strong>{{ $nombre }}</strong> | Coincidencias:
                        <strong>{{ $cantidadCoincidencias }}</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            @foreach ($respuestas as $respuesta)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('tours.show', $respuesta->slug) }}">
                            <img class="card-img-top" src="{{ $respuesta->img }}" alt="Camino Inca 4 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $respuesta->nombre }}</h5>
                            <p class="text-card">{{ $respuesta->descripcion }}</p>
                            <div class="enlacesCategoria">
                                @if (Str::contains($respuesta->categoria, 'hikes'))
                                    <p style="display:none">
                                        {{ $hike = 'Diarios' }}
                                    </p>
                                    <a class="enlaceHike" href="{{ route('diarios') }}">
                                        {{ $hike }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'machupicchu'))
                                    <p style="display:none">
                                        {{ $mapi = 'Cusco' }}
                                    </p>
                                    <a class="enlaceMapi" href="{{ route('cusco') }}">{{ $mapi }}
                                    </a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'around'))
                                    <p style="display: none">
                                        {{ $peru = 'Caminatas' }}
                                    </p>
                                    <a class="enlaceAround" href="{{ route('trek') }}">
                                        {{ $peru }}
                                    </a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'luxury'))
                                    <p style="display:none">
                                        {{ $luxury = 'Perú' }}
                                    </p>
                                    <a class="enlaceLuxury" href="{{ route('paquetes') }}"> {{ $luxury }}</a>
                                @endif
                            </div>

                            <div class="row iconos-tours">
                                <div class="col-6">
                                    <span class="icon-clock-o" style="float: right"> {{ $respuesta->dias }} días</span>
                                </div>

                                <div class="col-6">
                                    <span class="icon-usd" style="float:left"><strong>
                                            {{ $respuesta->precio }}.00</strong></span>
                                </div>
                                <div class="col-12 pt-2">
                                    <span class="icon-map-marker"> {{ $respuesta->ubicacion }}</span>
                                </div>
                            </div>
                            <a href="{{ route('tours.show', $respuesta->slug) }}" class="boton-card">Más Info</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
