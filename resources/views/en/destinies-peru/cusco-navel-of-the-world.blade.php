@extends('layouts.appen')
@php $titulo="Cusco - Navel of the world | Incas Peru" @endphp
@php $descripcion="Cusco was the capital of the great Inca culture. Due to its majesty, it has been considered the Archaeological Capital of America" @endphp
@php $keywords="Cusco - Navel of the world | Incas Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/cusco-ciudad-imperial.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="cusco">
        <div class="container">
            <div class="row">
                <h1 class="h1-destinos">Imperial Cuzco</h1>
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
                            <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('destiniesPeru') }}">Destinies</a>
                                /
                                <a>Cusco</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h3 class="text-center mb-5">"Cusco"</h3>
                </div>
                @foreach ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('toursen.show', $tour->slug) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias" loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Daily' }}d
                                        </p>
                                        <a class="enlaceHike" href="{{ route('hikes') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'machuPicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Cusco' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }}
                                        </a>
                                    @endif

                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Adventure' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('around') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Perú' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('lodgen') }}">
                                            {{ $luxury }}</a>
                                    @endif
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            @if ($tour->dias == 1)
                                                {{ $tour->dias }} day
                                            @else
                                                {{ $tour->dias }} days
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
                                <a href="{{ route('toursen.show', $tour->slug) }}" class="boton-card">Más
                                    detalles</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
