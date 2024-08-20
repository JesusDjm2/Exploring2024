@extends('layouts.appt')
@section('content')
    <div class="blog-temas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Seus resultados de pesquisa</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            @foreach ($respuestas as $respuesta)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-new" style="width: 18rem;">
                        <a href="{{ route('tourspt.show', $respuesta->slug) }}">
                            <img class="card-img-top" src="{{ $respuesta->img }}" alt="Camino Inca 4 dias" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $respuesta->nombre }}</h5>
                            <p class="text-card">{{ $respuesta->descripcion }}</p>
                            <div class="enlacesCategoria">
                                @if (Str::contains($respuesta->categoria, 'caminata'))
                                    <p style="display:none">
                                        {{ $hike = 'Diários' }}
                                    </p>
                                    <a class="enlaceHike" href="{{ route('diariosp') }}">
                                        {{ $hike }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'machuPicchu'))
                                    <p style="display:none">
                                        {{ $mapi = 'Cusco' }}
                                    </p>
                                    <a class="enlaceMapi" href="{{ route('cuscop') }}">{{ $mapi }}
                                    </a>
                                @endif

                                @if (Str::contains($respuesta->categoria, 'around'))
                                    <p style="display: none">
                                        {{ $peru = 'Aventura' }}
                                    </p>
                                    <a class="enlaceAround" href="{{ route('trekp') }}">
                                        {{ $peru }}
                                    </a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'luxury'))
                                    <p style="display:none">
                                        {{ $luxury = 'Perú' }}
                                    </p>
                                    <a class="enlaceLuxury" href="{{ route('paquetesp') }}">
                                        {{ $luxury }}</a>
                                @endif
                            </div>
                            <div class="row iconos-tours">
                                <div class="col-6">
                                    <span class="icon-clock-o" style="float: right"> {{ $respuesta->dias }}
                                        days</span>
                                </div>

                                <div class="col-6">
                                    <span class="icon-usd" style="float:left"><strong>
                                            {{ $respuesta->precio }}.00</strong></span>
                                </div>
                                <div class="col-12 pt-2">
                                    <span class="icon-map-marker"> {{ $respuesta->ubicacion }}</span>
                                </div>
                            </div>
                            <a href="{{ route('tourspt.show', $respuesta->slug) }}" class="boton-card">Mais Info</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
