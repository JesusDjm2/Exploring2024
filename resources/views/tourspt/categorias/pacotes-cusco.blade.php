@extends('layouts.appt')
@php $titulo="Passeios em Cusco" @endphp
@php $descripcion="Hay muchas maneras de llegar a la maravilla del mundo Machu Picchu y te mostramos una lista de los mejores tours." @endphp
@php $keywords="Camino inca 2024, camino inca 2023, llegar a Machu Picchu, tour machu Picchu" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/Tours-a-Machu-Picchu-Tierras-Vivas.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="machu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        @php
                          echo  $titulo
                        @endphp
                    </h1>
                    <p style="color: #fff" class="text-center">
                        Esta é uma lista de todos os nossos passeios que incluem a cidade de Cusco
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mt-5">
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'machuPicchu'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
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
                                                days</span>
                                        </div>
    
                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left"><strong>
                                                    {{ $tour->precio }}.00</strong></span>
                                        </div>
                                        <div class="col-12 pt-2 mt-1">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tourspt.show', ['slug' => $tour->slug]) }}" class="boton-card">Mais
                                        info</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
